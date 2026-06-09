const THEME_KEY = 'tablerTheme';

window.ThemeManager = {

    get() {
        return localStorage.getItem(THEME_KEY) || 'light';
    },

    set(theme) {

        localStorage.setItem(THEME_KEY, theme);

        if (theme === 'dark') {
            document.body.setAttribute('data-bs-theme', 'dark');
        } else {
            document.body.removeAttribute('data-bs-theme');
        }

        window.dispatchEvent(
            new CustomEvent('theme-changed', {
                detail: { theme }
            })
        );
    },

    toggle() {
        this.set(
            this.get() === 'dark'
                ? 'light'
                : 'dark'
        );
    },

    init() {
        this.set(this.get());
    }
};

document.addEventListener('DOMContentLoaded', () => {
    ThemeManager.init();
});