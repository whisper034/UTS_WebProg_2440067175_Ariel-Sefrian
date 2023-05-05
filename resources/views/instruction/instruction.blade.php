<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instructions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center flex-column" style="width: 100vw; min-height: 100vh;">
    <div class="text-center fw-bold" style="font-size: 18pt;">
        Halo! Selamat datang di aplikasi milik 2440067175 - Ariel Sefrian khusus untuk UTS Web Programming 2023.
    </div>

    <br>

    <div style="font-size: 14pt;">
        Berikut adalah cara melihat User Interface untuk masing-masing user 1 dan 2:
        <ol>
            <li class="mb-1">
                Perhatikan di 'address bar' browser:

                <br>

                <img src="{{ asset('/images/miscellanous/address_bar.png') }}" alt="address bar browser" style="width: 100%;">

                <br>

                Terdapat route local, setiap orang bisa saja berbeda-beda. Untuk mengakses user pertama, cukup tambahkan '/1' tanpa tanda petik satu setelah route local tersebut:

                <br>

                <img src="{{ asset('/images/miscellanous/address_bar_2.png') }}" alt="address bar browser" style="width: 100%;">

                <br>

                Dengan cara yang sama, untuk mengakses user kedua, cukup tambahkan '/2' tanpa tanda petik satu setelah route local tersebut.
            </li>
            <li class="mb-1">
                Lalu pada browser, tekan F12 di keyboard ATAU klik kanan di halaman browsernya, kemudian pilih 'Inspect'.

                <br>

                <div class="text-center">
                    <img src="{{ asset('/images/miscellanous/inspect.png') }}" alt="inspect element" style="width: 30%;">
                </div>

                <br>
            </li>
            <li>
                Akan muncul seperti ini:

                <br>

                <div class="text-center">
                    <img src="{{ asset('/images/miscellanous/inspect_browser.png') }}" alt="inspect browser" style="width: 30%;">
                </div>

                <br>

                Tekan icon yang berbentuk seperti tablet dan handphone:

                <br>

                <div class="text-center">
                    <img src="{{ asset('/images/miscellanous/inspect_browser_2.png') }}" alt="inspect browser" style="width: 30%;">
                </div>

                <br>

                Kemudian di bagian Dimensions, pilih Iphone XR:

                <br>

                <div class="text-center">
                    <img src="{{ asset('/images/miscellanous/inspect_browser_3.png') }}" alt="inspect browser" style="width: 30%;">
                </div>
            </li>
        </ol>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>
