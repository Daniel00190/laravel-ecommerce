const mix = require('laravel-mix');

// Compile the JavaScript files
mix.js('resources/js/nav.js', 'public/js');

// Compile the CSS files individually
mix.copy('resources/css/app.css', 'public/css/app.css');
mix.copy('resources/css/cart.css', 'public/css/cart.css');
mix.copy('resources/css/home.css', 'public/css/home.css');
mix.copy('resources/css/nav.css', 'public/css/nav.css');
mix.copy('resources/css/register.css', 'public/css/register.css');
mix.copy('resources/css/shop.css', 'public/css/shop.css');

// Compile the user/register.css separately
mix.copy('resources/css/user/register.css', 'public/css/user/register.css');

// Copy the 'uploads' folder to the 'public' directory
mix.copy('resources/uploads', 'public/uploads');
