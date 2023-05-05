
## Halo! Selamat datang di aplikasi milik 2440067175 - Ariel Sefrian khusus untuk UTS Web Programming 2023.

### Cara setup aplikasi:
<ol>
<li>
Jalankan `composer install`
</li>

<br>

<li>
Copy file `.env.example`, kemudian paste di folder projectnya dan hapus `.example`, sehingga hanya tersisa `.env`
</li>

<br>

<li>
Apabila file `.env` sudah ada, jalankan `php artisan key:generate` di terminal
</li>

<br>

<li>
Setelah itu, jalankan `php artisan cache:clear` dan `php artisan config:clear` di terminal
</li>

<br>

<li>
Lalu, jalankan `npm install` di terminal, tunggu sampai selesai install
</li>

<br>

<li>
Jalankan `npm run watch-poll` di terminal
</li>

<br>

<li>
Buka terminal baru, jalankan `php artisan serve`, jadi ada 2 terminal yang masing-masing menjalankan `npm run watch poll` dan `php artisan serve`
</li>

<br>

<li>
Navigasi ke localhost yang digenerate oleh `php artisan serve`
</li>
</ol>

### Berikut adalah cara melihat User Interface untuk masing-masing user 1 dan 2:
<ol>
<li>
Perhatikan di 'address bar' browser:

<br>

<img src="public/images/miscellanous/address_bar.png" alt="address bar browser" style="width: 100%;">

Terdapat route local, setiap orang bisa saja berbeda-beda. Untuk mengakses user pertama, cukup tambahkan '/1' tanpa tanda petik satu setelah route local tersebut:

<img src="public/images/miscellanous/address_bar_2.png" alt="address bar browser" style="width: 100%;">

Dengan cara yang sama, untuk mengakses user kedua, cukup tambahkan '/2' tanpa tanda petik satu setelah route local tersebut.
</li>
<br>
<li>
Lalu pada browser, tekan F12 di keyboard ATAU klik kanan di halaman browsernya, kemudian pilih 'Inspect'.

<div style="text-align: center;">
<img src="public/images/miscellanous/inspect.png" alt="inspect element" style="width: 30%;">
</div>
</li>
<br>
<li>
Akan muncul seperti ini:

<div style="text-align: center;">
<img src="public/images/miscellanous/inspect_browser.png" alt="inspect browser" style="width: 30%;">
</div>

Tekan icon yang berbentuk seperti tablet dan handphone:

<div style="text-align: center;">
<img src="public/images/miscellanous/inspect_browser_2.png" alt="inspect browser" style="width: 30%;">
</div>

Kemudian di bagian Dimensions, pilih Iphone XR:

<div style="text-align: center;">
<img src="public/images/miscellanous/inspect_browser_3.png" alt="inspect browser" style="width: 30%;">
</div>
</li>
</ol>

<hr>

### Copyright &copy; --- 2440067175 - Ariel Sefrian
