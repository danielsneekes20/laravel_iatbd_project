<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/90a97825c1.js" crossorigin="anonymous"></script>
    <script src="/js/main.js" defer></script>
    <title>@yield('title')</title>
</head>
<body>
<header class="header">
        <!-- <figure class="logo">
            <img src="/img/thumbnail_Gekleurdeklein.png" alt="">
        </figure> -->
        
        <ul class="navbar">
            <li class="navbar__li"><a href="/myresponses"aria-label="navigatie home">My responses</a></li>
            <li class="navbar__li"><a href="/responses" aria-label="navigatie Acomodaties">Responses</a></li>
            <a href="/"><h1>Passenopjedier</h1></a>
            <li class="navbar__li"><a href="/searchsitter" aria-label="navigatie Beschikbaarheid">Search sitter</a></li>
            <li class="navbar__li"><a href="/dashboard" aria-label="navigatie Contact">Register</a></li>
        </ul>
        <div class="hamburger" id="hamburgerr">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
</header>
<section class="hamburger__nav" id="hamburger__id">
    <ul class="navbar flex__direction__column">
            <li class="navbar__li modal"><a href="/myresponses"aria-label="navigatie home">My Responses</a></li>
            <li class="navbar__li modal"><a href="/responses" aria-label="navigatie Acomodaties">Responses</a></li>
            <li class="navbar__li modal"><a href="/searchsitter" aria-label="navigatie Beschikbaarheid">Zoek oppasser</a></li>
            <li class="navbar__li modal"><a href="/dashboard" aria-label="navigatie Contact">Register</a></li>
        </ul>
</section>

<main>
    @yield('content')
</main>
<footer><p>Made by Daniel Sneekes<p></footer>
</body>
</html>