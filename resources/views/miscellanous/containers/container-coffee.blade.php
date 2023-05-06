@include('miscellanous.other.coffee-button')

<main class="container">
    @php($nowDate = now()->timezone('Asia/Jakarta')->format('Y-m-d H:i:s'))

    <br>

    <div style="padding-top: 3rem;">
        <div style="font-size: 20pt; border-radius: 3rem; padding: 0.4rem 0.6rem;" class="fw-bold text-white {{ $user->level }}-level-bg-color text-center">
            @if($active === 'coffee-list-signature')
                Signature Beverages
            @elseif($active === 'coffee-list-espresso')
                Espresso Beverages
            @elseif($active === 'coffee-list-brewed')
                Brewed Beverages
            @elseif($active === 'coffee-list-blended')
                Blended Beverages
            @endif
        </div>

        <br>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            @foreach($coffees as $coffeeKey => $coffeeValue)
{{--                buat display item-itemnya--}}
                <div class="col">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#coffee-{{ $coffeeValue['id'] }}">
                        <img src="{{ asset($coffeeValue['image_source']) }}" class="card-img-top" alt="coffee-image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $coffeeValue['coffee_name'] }}</h5>
                            <p class="card-text">{{ $coffeeValue['ind_price'] }}</p>
                        </div>
                    </div>
                </div>

{{--            modal ini digunakan untuk pop up--}}
                <div class="modal fade" id="coffee-{{ $coffeeValue['id'] }}" tabindex="{{ $coffeeValue['id'] }}" aria-labelledby="{{ $coffeeValue['coffee_name'] }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="{{ $coffeeValue['coffee_name'] }}">Buy Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="post" action="{{ route('buy-product') }}">
                                <div class="modal-body">
                                    <div>
                                        Do you want to buy 1 <strong>{{ $coffeeValue['coffee_name'] }}</strong>?
                                    </div>
                                    <div>
                                        Price: <strong>{{ $coffeeValue['ind_price'] }}</strong>
                                    </div>
                                    <div>
                                        @csrf
                                        <input type="text" name="user_id" value="{{ $user->id }}" style="display: none;">
                                        <input type="text" name="coffee_id" value="{{ $coffeeValue['id'] }}" style="display: none;">
                                        <input type="text" name="transaction_date" value="{{ $nowDate }}" style="display: none;">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="NO">Cancel</button>
                                    <button type="submit" class="btn btn-primary" value="BUY" onclick="alertTransactionSuccesfull('{{ $coffeeValue['coffee_name'] }}')">Buy!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</main>
