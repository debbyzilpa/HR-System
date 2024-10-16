// public/js/script.js
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        let valid = true;

        // Contoh validasi: pastikan semua field yang required diisi
        form.querySelectorAll('[required]').forEach(function (input) {
            if (!input.value.trim()) {
                valid = false;
                input.style.borderColor = 'red';
            } else {
                input.style.borderColor = '';
            }
        });

        if (!valid) {
            event.preventDefault();
            alert('Harap isi semua field yang diperlukan.');
        }
    });
});
