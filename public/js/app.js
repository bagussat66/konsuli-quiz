// Fungsi untuk menampilkan/menyembunyikan password
function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.querySelector('.password-toggle');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordToggle.textContent = 'Hide';
    } else {
        passwordInput.type = 'password';
        passwordToggle.textContent = 'Show';
    }
}

// Fungsi untuk menangani submit form
function handleFormSubmit(event) {
    event.preventDefault();

    // Lakukan validasi form di sini
    // ...

    // Jika validasi berhasil, submit form
    event.target.submit();
}

// Menambahkan event listener pada form
const form = document.querySelector('form');
form.addEventListener('submit', handleFormSubmit);

// Menambahkan event listener pada tombol toggle password
const passwordToggle = document.querySelector('.password-toggle');
passwordToggle.addEventListener('click', togglePasswordVisibility);
