<x-layout title="Personal">
    @if (session('success') === 'claim_success')
        <script>
            Swal.fire({
                title: '🎉 Hadiah Berhasil Diklaim!',
                html: `
                <p>Pastikan nomor DANA Anda benar ✅</p>
                <p>Proses akan berjalan maksimal <b>1x24 jam</b>.</p>
            `,
                icon: 'success',
                confirmButtonText: 'Oke, Siap!',
                confirmButtonColor: '#3085d6',
                customClass: {
                    popup: 'rounded-4 shadow'
                }
            });
        </script>
    @endif

    <section class="hero">
        <div class="hero-text">
            <h5 style="color:var(--biru); font-weight:600;">DOMPET DIGITAL</h5>
            <h1>Senyata dompet di tangan, secepat akses di genggaman</h1>
            <p>DANA Wallet bikin hidup kamu jadi ringkas, hanya perlu tambah berbagai item ke HP kamu sekarang dan
                nikmati akses mudah dan cepat.</p>
            <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#downloadModal">Coba Wallet di
                DANA</button>
        </div>
        <div class="hero-image">
            <img src="{{ asset('web/images/preview.png') }}" alt="App Preview">
        </div>
    </section>
    <section class="section-white">
        <h1>Kenapa Pilih DANA?</h1>
        <p>Simplifikasi pembayaran, lebih cepat, aman, dan bisa diakses kapan saja.</p>

        <div class="features">
            <div class="feature-card">
                <i class="fa-solid fa-shield-halved"></i>
                <h4>Keamanan Terjamin</h4>
                <p>Transaksi dilindungi dengan teknologi enkripsi terbaik.</p>
            </div>
            <div class="feature-card">
                <i class="fa-solid fa-bolt"></i>
                <h4>Transaksi Cepat</h4>
                <p>Bayar dan transfer hanya dalam hitungan detik.</p>
            </div>
            <div class="feature-card">
                <i class="fa-solid fa-gift"></i>
                <h4>Promo Menarik</h4>
                <p>Dapatkan cashback & voucher eksklusif tiap transaksi.</p>
            </div>
        </div>
    </section>

</x-layout>
