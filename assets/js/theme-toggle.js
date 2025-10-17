/**
 * Handles toggling the light/dark theme for the site.
 *
 * It checks for a user's preference in localStorage or their system's
 * preferred color scheme and applies the theme accordingly. It also
 * manages the visibility of sun/moon icons on the toggle buttons.
 */
(function() {
    const htmlEl = document.documentElement;

    function applyTheme(theme) {
        htmlEl.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        updateIcons(theme);
    }

    function updateIcons(theme) {
        const isDark = theme === 'dark';
        document.querySelectorAll('.theme-icon-sun').forEach(el => el.classList.toggle('hidden', !isDark));
        document.querySelectorAll('.theme-icon-moon').forEach(el => el.classList.toggle('hidden', isDark));
    }

    function toggleTheme() {
        const currentTheme = htmlEl.getAttribute('data-theme') || 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        applyTheme(newTheme);
    }

    // Set initial theme
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    const initialTheme = savedTheme || (prefersDark ? 'dark' : 'light');
    applyTheme(initialTheme);

    // Attach event listeners to all toggle buttons
    document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.theme-toggle-button').forEach(button => {
            button.addEventListener('click', toggleTheme);
        });
        // Ensure icons are correctly set on page load after DOM is ready
        updateIcons(htmlEl.getAttribute('data-theme'));
    });

})();