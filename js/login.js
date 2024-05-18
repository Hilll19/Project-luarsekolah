document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#login form');
    const usernameInput = document.querySelector('#username');
    const passwordInput = document.querySelector('#password');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Validasi username dan password
        if (usernameInput.value.trim() === '') {
            alert('Username tidak boleh kosong');
            return;
        }

        if (passwordInput.value.trim() === '') {
            alert('Password tidak boleh kosong');
            return;
        }

        // Jika validasi berhasil, submit form
        this.submit();
    });
});
