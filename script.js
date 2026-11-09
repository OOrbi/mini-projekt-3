document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('themeToggle');

    // 1. Sprawdź przy załadowaniu strony, czy motyw był wcześniej zapisany
    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-mode');
    }

    // 2. Obsługa kliknięcia przycisku
    themeToggleBtn.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');

        // 3. Zapisz aktualny stan motywu w localStorage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
});