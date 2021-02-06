Source code Covid19Corner

Source code web covid-19 - Seperti yang kita ketahui bahwa kasus covid-19 di negara kita Indonesia masih sangatlah tinggi, hal ini disebabkan karena beberapa masyarakat masih kekurang informasi atau juga belum teredukasi mengenai apa itu covid-19, bagaimana cara pencegahannya, apa saja gejalanya, dan lain-lain. Hal ini lah yang menjadi latar belakang kami membuat project web informasi covid-19 sederhana yang memberikan informasi mengenai covid-19 melalui postingan artikel atau blog dan memberikan update informasi kasus covid-19 di Indonesia secara realtime.

Source code project web informasi covid-19 yang sederhana ini dibuat dengan menggunakan framework Laravel versi 7, template front end menggunakan template dari Colorlib dan template back end menggunakan SB Admin 2.

Di source code project web covid-19 ini ada beberapa fitur seperti statistik covid-19 Indonesia yang datanya diperbarui secara realtime menggunakan API dari kawalcorona.com. Ada juga fitur post atau blog yang berfungsi untuk membagikan artikel atau informasi seputar covid-19 atau seputar hidup sehat. Selain itu juga ada beberapa section seperti gejala dan bagaimana cara melindungi diri dari covid-19. Semua data yang ditampilkan di front end mulai dari data artikel, data gejala, data pencegahan, dan data umum (nama web, phone, email, alamat, keyword, meta description, dll) dapat diolah dari back end.

untuk menambahkan widget live chat seperti tawk.to bisa ditambahkan dengan menambahkan script di form settings. Script tawk.to bisa didapatkan dengan langkah-langkah di artikel ini: https://vanjava.net/blog/cara-memasang-chat-widget-tawkto-di-website

Cara installasi:

1. Download file project dengan klik tombol download di bawah ini.

2. Extract file project

3. buka terminal & masuk ke direktori project yang sudah diextract.

4. Jalankan artisan "php artisan storage:link"

jika terdapat error, masuk ke direktori public kemudian jalankan command "rm storage". Jika sudah, kembali ke direktori project lagi dan jalankan "php artisan storage:link"

5. Buat database baru di phpmyadmin atau adminer atau yang lainnya.

6. import file database dari folder project dengan nama file covid.sql.

7. sesuaikan nama database di file .env dengan nama database yang baru ditambakan pada no. 5

8. Sekarang coba jalankan php artisan serve.

9. Untuk masuk ke halaman admin, akses ke 127.0.0.1:8000/login

email hilmi@mail.test dan password 12345678

10. SELESAI.

Apakah source code ini boleh diupload di hosting (live) ? Ya boleh dong, tapi kamu tidak diperkenankan menghapus footer link (Copyright ©2020 All rights reserved | This template is made with  love by Colorlib).

Jika ingin menggunakan source code web covid-19 ini untuk live, Kami menyarankan untuk menggunakan layanan hosting dari Niagahoster, karena menurut pengalaman kami layanan dari Niagahoster sangat baik sekali mulai dari produk, fitur dan layanannya sangat memuaskan.

Jika ingin membeli layanan dari Niagahoster.co.id gunakan kode voucher "vanjava" untuk mendapatkan potongan harga sebesar 5%.

Detail: https://vanjava.net/repositori/covid19corner-source-code-web-informasi-covid-19
