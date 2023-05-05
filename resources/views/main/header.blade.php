@include('miscellanous.other.greetings')
@include('miscellanous.other.coffee-button')

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
        <div class="{{ $user->level }}-level-color">
            {{ $user->level }} Level
        </div>
    </div>

    <ul class="nav d-flex justify-content-evenly align-items-center container-fluid {{ $user->level }}-level-bg-color mb-2" style="padding: 0.4rem 0.4rem;">
        <li class="nav-item profile">
            <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item" href="/{{ $user->id }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill me-2" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg> Profile
            </a>
        </li>
        <li class="nav-item transaction">
            <a class="d-flex justify-content-center align-items-center nav-link text-white full-width-accordion-item" href="/{{ $user->id }}/transaction-history">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check-fill me-2" viewBox="0 0 16 16">
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                </svg> Transaction
            </a>
        </li>
    </ul>

    @if(substr($active, 0, 11) === 'coffee-list')
        @yield('coffee-accordion')
    @endif
</nav>
