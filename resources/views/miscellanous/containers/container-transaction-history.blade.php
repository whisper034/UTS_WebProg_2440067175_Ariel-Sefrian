<main class="container">
    <div style="font-size: 16pt;" class="fw-bold mb-2">
        Transaction History
    </div>

    @foreach($transactions as $transactionKey => $transactionValue)
        <div class="d-flex">
            <img src="{{ asset($transactionValue['image_source']) }}" alt="promo" style="width: 6rem; height: 6rem; object-fit: cover;" class="me-3">

            <div class="">
                <div class="fw-bold">
                    {{ $transactionValue['coffee_name'] }}
                </div>

                <div class="text-justify">
                    Price: {{ $transactionValue['ind_price'] }}

                    <br>

                    Bought On: {{ $transactionValue['transaction_date_formatted'] }}, {{ $transactionValue['transaction_time'] }}
                </div>
            </div>
        </div>

        <br>
    @endforeach
</main>
