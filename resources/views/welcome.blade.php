<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenYourMind</title>
    <link rel="icon" href="{{ asset('Logo.svg') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body id="app" class="bg-hero-main">
    <!-- <App /> -->
    <router-view></router-view>
</body>

</html>