<main class="container">
    <div>
        <div class="d-flex mb-1">
            <div class="me-2" style="font-size: 20pt;">
                {{ $user->points }}
            </div>
            <img src="{{ asset('/images/logo/gold-star.png') }}" alt="gold star"
                 class="" style="width: 6%; object-fit: contain;">
        </div>

        <div class="mb-3" style="font-size: 14pt;">
            Star Balance
        </div>

        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: {{ $user->points }}%;"
                 aria-valuenow="{{ $user->points }}" aria-valuemin="0" aria-valuemax="100">
                {{ $user->points }}
            </div>
        </div>

        <div class="redeem mb-4">
            <a class="text-white {{ $user->level }}-level-bg-color" href="#"
               style="padding: 0.7rem 1.3rem; text-decoration: none; border-radius: 40rem;">Redeem <img
                    src="{{ asset('/images/logo/gold-star.png') }}" alt="gold star" class=""
                    style="width: 5%; object-fit: contain;"></a>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1" style="background-color: black;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2" style="background-color: black;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3" style="background-color: black;"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/images/promos/banner_1.jpg') }}" alt="promo 1" class=""
                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/promos/banner_2.jpg') }}" alt="promo 1" class=""
                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/images/promos/banner_3.jpg') }}" alt="promo 1" class=""
                         style="width: 100%; height: 15rem; object-fit: contain; border-radius: 1rem;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        @include('miscellanous.other.promos')
    </div>
</main>
