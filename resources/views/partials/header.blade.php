@php
    $menu = [
        ['label' => 'Beranda',        'route' => 'home',              'active' => 'home'],
        ['label' => 'Katalog',        'route' => 'instruments.index', 'active' => 'instruments.*'],
        ['label' => 'Cara Pembelian', 'route' => 'how-to-buy',        'active' => 'how-to-buy'],
        ['label' => 'Tentang Kami',   'route' => 'about',             'active' => 'about'],
        ['label' => 'Kontak',         'route' => 'contact',           'active' => 'contact'],
    ];
@endphp

<nav class="navbar navbar-expand bg-black border-bottom border-secondary-subtle sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
            <i class="bi bi-music-note-beamed me-2"></i>Harmoniq
        </a>

        <ul class="navbar-nav me-auto ms-4">
            @foreach($menu as $item)
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs($item['active']) ? 'active fw-semibold' : '' }}"
                       href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>

        <a class="btn btn-success btn-sm fw-semibold"
           href="https://wa.me/6287736914429" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp me-1"></i>Chat WhatsApp
        </a>
    </div>
</nav>