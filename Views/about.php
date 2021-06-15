<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="about">
        <div class="row">
           <img src="profil.PNG" title="Tio Prastyo" alt="" class="image-circle" width="200" height="200" align="center" border="5">
            <p style="text-align: center;">Selamat datang di Program Aplikasi baru saya.  Perkenalkan nama saya Prasetyo Wicaksono Aji.Orang-orang 
            	yang kenal saya biasanya memanggil saya tio.Saya asli Indonesia Khususnya daerah jawatengah yatu Purowrejo.Kecintaan membuat sebuah 
            	program aplikasi web  tumbuh sejak pertama kali mengenal di web komputer yaitu di tahun 2019. 
        		Dari yang tidak bisa apa-apa hingga akhirnya berkembang menjadi web program design dan analisis dan berlanjut dengan menaruh minat
        		pada sebuah program aplikasi web yang hingga sekarang masih belajaran dan perlu pengembangan terus menerus.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>

