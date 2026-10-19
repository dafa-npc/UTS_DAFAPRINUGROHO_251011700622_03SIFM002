<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InstrumentController extends Controller
{
    private const PER_PAGE = 8;

    public function index(Request $request): View
    {

        $filters = $request->validate([
            'q'     => ['nullable', 'string', 'max:100'],
            'type'  => ['nullable', 'string', 'max:50'],
            'brand' => ['nullable', 'string', 'max:50'],
        ]);

        $instruments = Instrument::query()
            ->search($filters['q'] ?? null)
            ->ofType($filters['type'] ?? null)
            ->ofBrand($filters['brand'] ?? null)
            ->orderBy('name')
            ->paginate(self::PER_PAGE)
            ->withQueryString();         

        // Data untuk tombol filter & dropdown
        $types  = Instrument::query()->distinct()->orderBy('type')->pluck('type');
        $brands = Instrument::query()->distinct()->orderBy('brand')->pluck('brand');

        return view('instruments.index', [
            'instruments' => $instruments,
            'types'       => $types,
            'brands'      => $brands,
            'filters'     => $filters,
        ]);
    }

    /**
     * Detail produk (route model binding berdasarkan id).
     */
    public function show(Instrument $instrument): View
    {
        $related = Instrument::query()
            ->where('type', $instrument->type)
            ->whereKeyNot($instrument->getKey())
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('instruments.show', [
            'instrument' => $instrument,
            'related'    => $related,
        ]);
    }
}