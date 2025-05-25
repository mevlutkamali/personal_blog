const themeToggle = document.getElementById('themeToggle');

// Daha önce kaydedilmiş tema varsa onu uygula
if (localStorage.getItem('theme') === 'dark') {
    document.body.classList.add('dark-mode');
}

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Tema tercihini kaydet
    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
});
