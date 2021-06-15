
hallo assalamuallaikum balik lagi ke github saya mastio1836 kali ini saya akan membuat sebuah program menggunakan framework codeigniter,Xampp,file editor text kalian(VSC,sublime,notepad++) mau tau seperti apa mari kita simak penjelasan kali ini

# Persiapan
Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan:

- php-json ekstension untuk bekerja dengan JSON;
- php-mysqlnd native driver untuk MySQL;
- php-xml ekstension untuk bekerja dengan XML;
- php-intl ekstensi untuk membuat aplikasi multibahasa;
- libcurl (opsional), jika ingin pakai Curl.

 Untuk mengaktifkan ekstentsi tersebut melalui XAMPP Control Panel, pada bagian Apache klik Config ->
 

![cara ekstansi xampp](https://user-images.githubusercontent.com/56244106/122131939-2c498800-ce64-11eb-81d8-ac35c9af6658.JPG)

lalu kalian akan diarahkan ke notepad

![extension](https://user-images.githubusercontent.com/56244106/122132029-500cce00-ce64-11eb-8feb-cc2cf7129d10.JPG)

Kemudian buat file direktori kalian (xampp,htdocs,labs11_php_CI) terserah kalian ingin menamakan folder kalian

![folder labs11](https://user-images.githubusercontent.com/56244106/122132433-07a1e000-ce65-11eb-856b-440179edd5fa.JPG)

Installasi CODEIGNITER
Ada dua cara installasi Codeigniter, yaitu cara manual dan menggunakan composer. Pada praktik kali ini menggunakan cara manual:

# Unduh Codeigniter dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![output koneksi ci](https://user-images.githubusercontent.com/56244106/122132488-286a3580-ce65-11eb-90bc-4c726653c233.JPG)

# Menjalankan CLI (comand Line interface)
 jika kalian belum mengetahui cara membukanya kalian tinggal buka (xampp -> shell di pojok kanan)
Arahkan lokasi direktori sesuai dengan direktori kerja project yang sudah dibuat (xampp/htdocs/lab11_php_ci/ci4/)

![shell xampp](https://user-images.githubusercontent.com/56244106/122132683-839c2800-ce65-11eb-85f4-0cf39502a17d.JPG)
disitu gambar tersebut ada code "php spark" perintah untuk menjalankan CLI codeigniter

# Struktur Direktori pada Codeigniter
Terdapat beberapa direktori dan file yang perlu dipahami fungsi dan kegunaannya.

- github folder ini kita butuhkan untuk konfigurasi repo github, seperti konfigurasi untuk build dengan github action;
- app folder ini akan berisi kode dari aplikasi yang kita kembangkan;
- public folder ini berisi file yang bisa diakses oleh publik, seperti file index.php, robots.txt, favicon.ico, ads.txt, dll;
- tests folder ini berisi kode untuk melakukan testing dengna PHPunit;
- vendor folder ini berisi library yang dibutuhkan oleh aplikasi, isinya juga termasuk kode core dari system CI.
- writable folder ini berisi file yang ditulis oleh aplikasi. Nantinya, kita bisa pakai untuk menyimpan file yang di-upload, 
logs, session, dll.

Sedangkan file-file yang berada pada root direktori CI sebagai berikut.
- env adalah file yang berisi variabel environment yang dibutuhkan oleh aplikasi.
- gitignore adalah file yang berisi daftar nama file dan folder yang akan diabaikan oleh Git.
- build adalah script untuk mengubah versi codeigniter yang digunakan. Ada versi release (stabil) dan development (labil).
- composer.json adalah file JSON yang berisi informasi tentang proyek dan daftar library yang dibutuhkannya. File ini digunakan oleh Composer sebagai acuan.
- composer.lock adalah file yang berisi informasi versi dari libraray yang digunakan aplikasi.
- license.txt adalah file yang berisi penjelasan tentang lisensi Codeigniter;
- phpunit.xml.dist adalah file XML yang berisi konfigurasi untuk PHPunit.
- README.md adalah file keterangan tentang codebase CI. Ini biasanya akan dibutuhkan pada repo github atau gitlab.
- spark adalah program atau script yang berfungsi untuk menjalankan server, generate kode, dll.
- 
# Konsep MVC
- Codeigniter menggunakan konsep pemrograman berorientasi objek dalam mengimplementasikan konsep MVC.
- Model merupakan kode program yang berisi pemodelan data. Data dapat berupa database ataupun sumber lainnya.
- View merupakan kode program yang berisi bagian yang menangani terkait tampilan user interface sebuah aplikasi. - 
 didalam aplikasi web biasanya pasti akan berhubungan dengan html dan css.
- Controller merupakaan kode program yang berkaitan dengan logic proses yang menghubungkan antara view dan model. Controller berfungsi untuk menerima request dan data dari user kemudian diproses dengan menghubungkan bagian model dan view.
- Routing dan Controller Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan 
  fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk 
  menentukan Controller mana yang harus merespon sebuah request. Controller adalah class atau script yang 
 bertanggung jawab merespon sebuah request. Pada Codeigniter, request yang diterima oleh file index.php akan 
 diarahkan ke Router untuk meudian oleh router tesebut diarahkan ke Controller. Router terletak pada file   
 app/config/Routes.php

# Mengaktifkan Mode Debugging pada Codeigniter
Fitur debugging digunakan untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program. Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi pada environment variable CI_ENVIRONMENT menjadi development. jadi kalian tinggal menghapus komentar"#" dan mengganti production menjadi development contohnya"CI_ENVIRONMENT = development"

![environment](https://user-images.githubusercontent.com/56244106/122133348-bbf03600-ce66-11eb-8a87-057609e4276d.JPG)
ini terjadi jika kode komentar "#" dan belum di ganti ke development
![error localhost 8080](https://user-images.githubusercontent.com/56244106/122133401-d0343300-ce66-11eb-8e40-512241f072b5.JPG)

# Membuat Route Baru
Tambahkan kode berikut di dalam app/config/Routes.php

$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

![routes get contact](https://user-images.githubusercontent.com/56244106/122133511-070a4900-ce67-11eb-85c7-f483abd17a81.JPG)

# Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut.

php spark routes

Ketik perintah berikut untuk menjalankan server CI 4 pada port 8080.

php spark serve

![shell xampp 2](https://user-images.githubusercontent.com/56244106/122133561-2d2fe900-ce67-11eb-84fe-0767ef4aaebe.JPG)

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page.

# Membuat Controller
Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti berikut.

<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function about()
  {
    echo "Ini halaman About";
  }
  public function contact()
  {
    echo "Ini halaman Contact";
  }
  public function faqs()
  {
    echo "Ini halaman FAQ";
  }
}
Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaotu halaman sudah dapat diakses.

# Auto Route
Secara default fitur autoroute pada Codeiginiter sudah aktif. Untuk mengubah status autoroute dapat mengubah nilai variabelnya. Untuk menonaktifkan ubah nilai true menjadi false.

$routes->setAutoRoute(true);
Tambahkan method baru pada Controller Page seperti berikut.

public function tos()
{
   echo "ini halaman Term of Services";
}
![function tos](https://user-images.githubusercontent.com/56244106/122133706-6b2d0d00-ce67-11eb-9700-828575886c9d.JPG)
![halaman tos](https://user-images.githubusercontent.com/56244106/122133725-77b16580-ce67-11eb-8f70-0fbdb9197ce0.JPG)

Membuat View
Buat file baru dengan nama about.php pada direktori view (app/view/about.php) kemudian coding seperti berikut.

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
</head>
<body>
  <h1><?= $title; ?></h1>
  <hr>
  <p><?= $content; ?></p>
</body>
</html>

Ubah method about pada class Controller Page menjadi seperti berikut:

public function about()
{
  return view('about', ['title' => 'Halaman Abot','content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.']);
}
![public function about method about input](https://user-images.githubusercontent.com/56244106/122133814-9b74ab80-ce67-11eb-9d95-0bb936d60ceb.JPG)

# membuat Layout Web dengan CSS
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada Codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori public. Buat file css pada direktori public dengan nama style.css

![penyimpanan style css](https://user-images.githubusercontent.com/56244106/122134081-23f34c00-ce68-11eb-8980-1dce02e9263f.JPG)
lalu kalian buat kembali folder template app->views
![penyimpanan template](https://user-images.githubusercontent.com/56244106/122134225-61f07000-ce68-11eb-8983-21af2faff742.JPG)

# membuat file header
buat file baru di teks editor kalian dengan nama "header.php"
lalu kalian simpan di File app/view/template/header.php

![header input](https://user-images.githubusercontent.com/56244106/122134344-96fcc280-ce68-11eb-9df6-5c7194fa297d.JPG)

lalu buat file lagi dengan nama "footer.php"
lalu kalian simpan di File app/view/template/header.php
![footer input](https://user-images.githubusercontent.com/56244106/122134424-c14e8000-ce68-11eb-89de-12c2ed6b5a97.JPG)

CSS nyaa
![css input](https://user-images.githubusercontent.com/56244106/122134448-cdd2d880-ce68-11eb-9b09-f008a20c0554.JPG)

# TUGAS 
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.
sebelum kalian ingin mengupdate atau mengkoneksikan link navigasi kalian harus menambahkan route kembali seperti berikut
Untuk source code nya kalian bisa ambil di file atas ikuti arah dari tugas ini 

![routes get contact](https://user-images.githubusercontent.com/56244106/122134641-38841400-ce69-11eb-94c8-33e85897c5bf.JPG)


# kalian tinggal controller seperti ini

![page input buat tugas](https://user-images.githubusercontent.com/56244106/122134543-0377c180-ce69-11eb-99f0-b9fade33f0f0.JPG)

# lalu navigasi link about 

![input tugas about](https://user-images.githubusercontent.com/56244106/122134820-8dc02580-ce69-11eb-971f-f1b121209eed.JPG)


![aboutme output tugas](https://user-images.githubusercontent.com/56244106/122134677-4afe4d80-ce69-11eb-8dcc-d798544e54dc.JPG)

# lalu menu artikel

![artikel input](https://user-images.githubusercontent.com/56244106/122134787-81d46380-ce69-11eb-8d04-e0001e224dc1.JPG)


![artikel output tugas](https://user-images.githubusercontent.com/56244106/122134711-5ea9b400-ce69-11eb-8685-8f149d968ab1.JPG)

# dan menu contact

![kontak input](https://user-images.githubusercontent.com/56244106/122134772-7aad5580-ce69-11eb-8627-5b195b515dac.JPG)


![contact output tugas](https://user-images.githubusercontent.com/56244106/122134749-6f5a2a00-ce69-11eb-86a8-fcdfcd670694.JPG)
