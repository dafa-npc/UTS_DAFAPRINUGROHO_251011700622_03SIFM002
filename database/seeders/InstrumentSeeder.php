<?php

namespace Database\Seeders;

use App\Models\Instrument;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    public function run(): void
    {
        $instruments = [
            // ---------- Gitar ----------
            [
                'name'        => 'Yamaha F310 Acoustic Guitar',
                'brand'       => 'Yamaha',
                'type'        => 'Gitar',
                'price'       => 1850000,
                'image'       => 'gitar-1.jpeg',
                'description' => 'Gitar akustik dreadnought paling populer untuk pemula. Top spruce dan back & side meranti menghasilkan suara hangat dan lantang. Neck nyaman dipegang sehingga cocok untuk belajar chord pertama.',
            ],
            [
                'name'        => 'Fender Player Stratocaster',
                'brand'       => 'Fender',
                'type'        => 'Gitar',
                'price'       => 17500000,
                'image'       => 'gitar-2.jpeg',
                'description' => 'Gitar elektrik ikonik dengan tiga single-coil Alnico 5 yang jernih dan bertenaga. Body alder, neck maple, dan tremolo 2-point membuatnya serbaguna dari blues, pop, sampai rock.',
            ],
            [
                'name'        => 'Ibanez GRX70QA Electric Guitar',
                'brand'       => 'Ibanez',
                'type'        => 'Gitar',
                'price'       => 3900000,
                'image'       => 'gitar-3.jpeg',
                'description' => 'Gitar elektrik konfigurasi HSS dengan quilted maple top. Neck tipis dan cepat, sangat cocok untuk permainan solo dan riff agresif dengan harga terjangkau.',
            ],
            [
                'name'        => 'Cort AD810 Dreadnought',
                'brand'       => 'Cort',
                'type'        => 'Gitar',
                'price'       => 1650000,
                'image'       => 'gitar-4.jpeg',
                'description' => 'Gitar akustik dengan top spruce dan finishing open pore yang membuat resonansi lebih bebas. Pilihan hemat untuk latihan harian maupun tampil di kafe.',
            ],

            // ---------- Bass ----------
            [
                'name'        => 'Squier Affinity Precision Bass',
                'brand'       => 'Fender',
                'type'        => 'Bass',
                'price'       => 4800000,
                'image'       => 'bass-1.jpeg',
                'description' => 'Bass 4 senar dengan karakter P-Bass klasik: nada tebal, padat, dan mudah menyatu dalam band. Cocok untuk pemula hingga panggung kecil.',
            ],
            [
                'name'        => 'Ibanez GSR200 Bass',
                'brand'       => 'Ibanez',
                'type'        => 'Bass',
                'price'       => 4200000,
                'image'       => 'bass-2.jpeg',
                'description' => 'Bass elektrik bodi ramping dengan neck Jatoba yang tipis dan responsif. Dilengkapi pickup aktif sehingga nada tetap jelas di berbagai genre.',
            ],

            // ---------- Drum ----------
            [
                'name'        => 'Pearl Roadshow 5-Piece Drum Set',
                'brand'       => 'Pearl',
                'type'        => 'Drum',
                'price'       => 9500000,
                'image'       => 'drum-1.jpeg',
                'description' => 'Paket drum akustik lengkap berisi bass drum, tom, floor tom, snare, hardware, dan cymbal. Siap dimainkan langsung, ideal untuk studio latihan dan sekolah musik.',
            ],
            [
                'name'        => 'Tama Imperialstar 5-Piece',
                'brand'       => 'Tama',
                'type'        => 'Drum',
                'price'       => 13900000,
                'image'       => 'drum-2.jpeg',
                'description' => 'Shell poplar 6-ply dengan hardware kokoh dan finishing hairline. Suaranya hangat dan punchy, naik kelas dari drum set level pemula.',
            ],
            [
                'name'        => 'Roland TD-1DMK Electronic Drum',
                'brand'       => 'Roland',
                'type'        => 'Drum',
                'price'       => 12000000,
                'image'       => 'drum-3.jpeg',
                'description' => 'Drum elektrik dengan pad mesh yang senyap dan 15 kit bawaan. Pilihan tepat untuk berlatih di rumah atau apartemen tanpa mengganggu tetangga.',
            ],

            // ---------- Keyboard ----------
            [
                'name'        => 'Yamaha PSR-E373 Keyboard',
                'brand'       => 'Yamaha',
                'type'        => 'Keyboard',
                'price'       => 4300000,
                'image'       => 'keyboard-1.jpeg',
                'description' => 'Keyboard 61 tuts touch response dengan 622 suara dan 205 style iringan. Dilengkapi fitur Yamaha Education Suite untuk membantu belajar lagu dengan cepat.',
            ],
            [
                'name'        => 'Casio CT-S300 Casiotone',
                'brand'       => 'Casio',
                'type'        => 'Keyboard',
                'price'       => 2600000,
                'image'       => 'keyboard-2.jpeg',
                'description' => 'Keyboard portabel 61 tuts yang ringan dengan 400 suara dan 77 ritme. Speaker bawaan bertenaga, cocok untuk dibawa ke acara komunitas atau gereja.',
            ],
            [
                'name'        => 'Korg Kross 2-61 Workstation',
                'brand'       => 'Korg',
                'type'        => 'Keyboard',
                'price'       => 13500000,
                'image'       => 'keyboard-3.jpeg',
                'description' => 'Synthesizer workstation dengan sequencer 16 track, suara piano dan elektrik piano berkualitas, serta mesin efek lengkap. Andalan keyboardist panggung dan produser musik.',
            ],

            // ---------- Piano ----------
            [
                'name'        => 'Yamaha P-45 Digital Piano',
                'brand'       => 'Yamaha',
                'type'        => 'Piano',
                'price'       => 7500000,
                'image'       => 'piano-1.jpeg',
                'description' => 'Piano digital 88 tuts dengan aksi Graded Hammer Standard yang terasa seperti piano akustik. Ringkas, mudah dipindahkan, dan sangat populer untuk belajar piano.',
            ],
            [
                'name'        => 'Kawai ES120 Digital Piano',
                'brand'       => 'Kawai',
                'type'        => 'Piano',
                'price'       => 12900000,
                'image'       => 'piano-2.jpeg',
                'description' => 'Piano digital portabel dengan aksi Responsive Hammer Compact dan sumber suara Harmonic Imaging dari grand piano Kawai. Cocok untuk pianis serius yang butuh bobot ringan.',
            ],

            // ---------- Gesek & Petik ----------
            [
                'name'        => 'Stentor Student I Violin 4/4',
                'brand'       => 'Stentor',
                'type'        => 'Biola',
                'price'       => 2400000,
                'image'       => 'biola-1.jpeg',
                'description' => 'Biola ukuran penuh untuk pelajar, sudah termasuk bow, rosin, dan case. Kayu spruce solid pada top menghasilkan nada manis dan stabil.',
            ],
            [
                'name'        => 'Kala KA-15S Soprano Ukulele',
                'brand'       => 'Kala',
                'type'        => 'Ukulele',
                'price'       => 1100000,
                'image'       => 'ukulele-1.jpeg',
                'description' => 'Ukulele soprano mahogani dengan suara cerah dan ringan di tangan. Teman ideal untuk bermain santai, cover lagu, dan latihan pertama bagi anak-anak.',
            ],
        ];

        foreach ($instruments as $instrument) {
            Instrument::create($instrument);
        }
    }
}