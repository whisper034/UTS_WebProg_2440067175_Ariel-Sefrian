@section('coffee-buy-button')
<div class="coffee-list fixed-bottom">
    <a class="d-flex justify-content-center align-items-center text-white {{ $user->level }}-level-bg-color" href="/{{ $user->id }}/coffee/signature" style="padding: 0.7rem 1.3rem; text-decoration: none; border-radius: 40rem;">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-plus-fill me-2" viewBox="0 0 16 16">
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z"/>
        </svg> Buy Coffee
    </a>
</div>
@endsection

@section('coffee-accordion')
    <div class="accordion full-width-accordion" id="coffeeList">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="font-size: 16pt;">
                    Coffee List
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse coffee-list-accordion" aria-labelledby="flush-headingOne" data-bs-parent="#coffeeList">
                <a class="full-width-accordion-item" href="/{{ $user->id }}/coffee/signature">Signature</a>

                <a class="full-width-accordion-item" href="/{{ $user->id }}/coffee/espresso">Espresso</a>

                <a class="full-width-accordion-item" href="/{{ $user->id }}/coffee/brewed">Brewed</a>

                <a class="full-width-accordion-item" href="/{{ $user->id }}/coffee/blended">Blended</a>
            </div>
        </div>
    </div>
@endsection
