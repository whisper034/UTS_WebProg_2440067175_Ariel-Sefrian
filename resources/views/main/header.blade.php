@include('miscellanous.other.greetings')

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

    <ul class="nav d-flex justify-content-evenly align-items-center container-fluid {{ $user->level }}-level-bg-color">
        <li class="nav-item profile">
            <a class="nav-link text-white" href="/{{ $user->id }}">Profile</a>
        </li>
        <li class="nav-item transaction">
            <a class="nav-link text-white" href="/{{ $user->id }}/transactions">Transaction</a>
        </li>
    </ul>
</nav>
