<div class="promo">
    <div style="font-size: 16pt;" class="fw-bold mb-2">
        Promo Information
    </div>

    @foreach($promoItem as $promoKey => $promoValue)
        <div class="d-flex">
            <img src="{{ asset($promoValue->image_source) }}" alt="promo" style="width: 6rem; height: 6rem; object-fit: cover;" class="me-3">
            <div class="">
                <div class="fw-bold">
                    {{ $promoValue->promo_name }}
                </div>
                <div class="text-justify">
                    {{ $promoValue->promo_description }}
                </div>
            </div>
        </div>

        <br>
    @endforeach
</div>
