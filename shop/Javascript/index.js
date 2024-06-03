// Function to change the CSS theme
function changeCSS() {
    // Gets the theme element
    var theme = document.getElementById('theme');
    // Gets the current theme name from the href attribute
    var themename = theme.getAttribute('href');
    // Checks if the current theme is dark.css
    if (themename == 'dark.css') {
        // If it is dark.css, change it to light.css
        theme.setAttribute('href', 'light.css');
        // Stores the updated theme name in local storage
        localStorage.setItem('theme', 'light');

    } else {
        // If it is not dark.css, change it to dark.css
        theme.setAttribute('href', 'dark.css');
        // Stores the updated theme name in local storage
        localStorage.setItem('theme', 'dark');

    }
}
// Retrieves the saved theme from local storage
var savedTheme = localStorage.getItem('theme');

// Check if the saved theme is dark
if (savedTheme === 'dark') {
    // If it is dark, set the theme element's href attribute to dark.css
    document.getElementById('theme').setAttribute('href', 'dark.css')
}