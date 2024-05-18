document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#registerForm');
    const fullNameInput = document.querySelector('#fullname');
    const emailInput = document.querySelector('#email');
    const passwordInput = document.querySelector('#password');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Validasi nama lengkap
        if (fullNameInput.value.trim() === '') {
            alert('Nama lengkap tidak boleh kosong');
            return;
        }

        // Validasi email
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value.trim())) {
            alert('Email tidak valid');
            return;
        }

        // Validasi password
        if (passwordInput.value.trim() === '') {
            alert('Password tidak boleh kosong');
            return;
        }

        // Jika validasi berhasil, submit form
        this.submit();
    });
});
