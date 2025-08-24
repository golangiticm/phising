<x-layout title="Dorprize">
    <x-layout.spinner></x-layout.spinner>
    {{-- Hero Section --}}
    <section class="hero">
        <div class="hero-image">
            <img src="{{ asset('web/images/preview.png') }}" alt="App Preview">
        </div>
        <div class="hero-text">
            <h5 style="color:var(--biru); font-weight:600;">EVENT MERDEKA</h5>
            <h1>Dorprize Spesial dari DANA 🎉</h1>
            <p>Ikuti program dorprize Merdeka bersama DANA dan dapatkan hadiah menarik setiap harinya!</p>
            <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#downloadModal">Gabung Sekarang</button>
        </div>
    </section>

    {{-- List Dorprize --}}
    <section class="section-white">
        <h1>Hadiah Dorprize</h1>
        <p>Berikut hadiah yang sedang dibagikan dalam event Merdeka oleh DANA:</p>

        <div class="prize-list">
            @php
                $dorprizes = [
                    [
                        'icon' => 'fa-solid fa-wallet',
                        'title' => 'Saldo Rp 10.000',
                        'desc' => 'Dapatkan saldo instan untuk transaksi harian.',
                    ],
                    [
                        'icon' => 'fa-solid fa-mobile-screen',
                        'title' => 'Pulsa Rp 50.000',
                        'desc' => 'Pulsa langsung masuk ke nomor kamu.',
                    ],
                    [
                        'icon' => 'fa-solid fa-bolt',
                        'title' => 'Saldo Rp 100.000',
                        'desc' => 'Cukup mainkan spin dan klaim saldo kamu.',
                    ],
                    [
                        'icon' => 'fa-solid fa-gift',
                        'title' => 'Voucher Belanja',
                        'desc' => 'Voucher menarik untuk belanja online/offline.',
                    ],
                    [
                        'icon' => 'fa-solid fa-star',
                        'title' => 'Hadiah Spesial',
                        'desc' => 'Hadiah kejutan spesial dari DANA untukmu.',
                    ],
                ];
            @endphp

            <div class="prize-grid">
                @foreach ($dorprizes as $item)
                    <a href="/dorprize" style="text-decoration: none">
                        <div class="prize-card">
                            <i class="{{ $item['icon'] }}"></i>
                            <h4>{{ $item['title'] }}</h4>
                            <p>{{ $item['desc'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
