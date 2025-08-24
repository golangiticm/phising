<!-- POPUP SPINNER -->
<div id="spinnerPopup" class="popup-overlay">
    <div class="popup-content">
        <button id="closeMainPopup" class="btn-close">✖</button>

        <h2>🎁 Spin & Menangkan Hadiah Event Kemerdekaan!</h2>
        <p>Coba keberuntunganmu untuk dapat saldo atau voucher.</p>

        <!-- Wheel -->
        <div class="wheel-container">
            <div id="wheel" class="wheel">
                <div class="label" style="--i:0;">Rp 10.000</div>
                <div class="label" style="--i:1;">Pulsa 50K</div>
                <div class="label" style="--i:2;">Rp 5.000</div> <!-- tukar -->
                <div class="label" style="--i:3;">Rp 100.000</div> <!-- tukar -->
                <div class="label" style="--i:4;">Rp 100.000</div>
                <div class="label" style="--i:5;">Rp 50.000</div> <!-- tukar -->


            </div>
            <button id="spinBtn" class="btn-spin">🎡 SPIN</button>
        </div>

        <div id="result" class="result"></div>
        <button id="retryBtn" class="btn-retry" style="display:none;">🔄 Coba Lagi</button>
    </div>
</div>

<!-- POPUP KLAIM -->
<div id="claimPopup" class="popup-overlay" style="display:none;">
    <div class="popup-content">
        <h3>🎉 Selamat!</h3>
        <p id="claimText"></p>
        <button id="claimBtn" class="btn-retry">✅ Ambil</button>
        <button id="closeClaimBtn" class="btn-retry btn-danger">❌ Tutup</button>
    </div>
</div>
