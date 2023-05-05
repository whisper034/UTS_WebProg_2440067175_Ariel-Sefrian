<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .home:hover, .profile:hover, .transaction:hover {
            background-color: #00af73;
        }

        .redeem a:hover {
            background-color: #00af73;
            border: solid black 1px;
        }
    </style>
</head>
@include('miscellanous.other.greetings')
<body style="min-height: 75rem; padding-top: 13rem; margin: 0;">
<nav class="navbar bg-light fixed-top navbar-light navbar-expand-md">
    <div class="text-center">
        <img src="{{ asset('/images/logo/Starbucks-logo.png') }}" alt="starbucks logo"
             class="" style="width: 50%;">
    </div>

    <div class="border-bottom w-100 border-dark mb-2"></div>

    <div class="d-flex justify-content-between align-items-center container-fluid mb-3">
        <div>
            @php($nowTime = now('GMT+7')->toTimeString('minute'))
            @php($hour = explode(':', $nowTime))
            @if ((int)$hour[0] < 12)
                @yield('morning')
            @elseif ((int)$hour[0] < 18)
                @yield('afternoon')
            @elseif ((int)$hour[0] <= 24)
                @yield('evening')
            @endif
        </div>
        <div style="color: #c6a961;">
            Green Level
        </div>
    </div>

    <ul class="nav d-flex justify-content-evenly align-items-center container-fluid" style="background-color: #006341;">
        <li class="nav-item home">
            <a class="nav-link text-white" href="./">Home</a>
        </li>
        <li class="nav-item profile">
            <a class="nav-link text-white" href="./profile">Profile</a>
        </li>
        <li class="nav-item transaction">
            <a class="nav-link text-white" href="./transaction">Transaction</a>
        </li>
    </ul>
</nav>

<main class="container">
    <div>

    </div>
</main>

<nav class="navbar fixed-bottom navbar-light text-center" style="background-color: #006341;">
    <div class="container-fluid">
        <div class="text-white">
            &copy; 2023 Starbucks Coffee - Ariel, All Rights Reserved
        </div>
    </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const myCarousel = document.querySelector('#myCarousel')
    const carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,
        wrap: false
    })
</script>
</html>
