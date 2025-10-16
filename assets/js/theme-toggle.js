/**
 * Handles toggling the light/dark theme for the site.
 *
 * It checks for a user's preference in localStorage or their system's
 * preferred color scheme and applies the theme accordingly.
 */
(function() {
  const htmlEl = document.documentElement;
  const savedTheme = localStorage.getItem("theme");
  const prefersDark = window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches;

  // Set initial theme based on saved preference or system setting
  const initialTheme = savedTheme || (prefersDark ? "dark" : "light");
  htmlEl.setAttribute("data-theme", initialTheme);

  // Find the toggle button
  const toggleButton = document.getElementById("themeToggle");

  if (toggleButton) {
    toggleButton.addEventListener("click", () => {
      const currentTheme = htmlEl.getAttribute("data-theme") || "light";
      const newTheme = currentTheme === "dark" ? "light" : "dark";

      // Apply new theme and save it to localStorage
      htmlEl.setAttribute("data-theme", newTheme);
      localStorage.setItem("theme", newTheme);
    });
  }
})();