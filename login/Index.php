<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AquaShop.co</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,700;0,900;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my style -->
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Aqua<span>Shop</span>.co</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
      </div>
      <div class="navbar-extra">
      <a href="logout.php" class="cta">Log out</a>
      </div>
    </nav>
    <!-- navbar end -->
    <!-- hero section start -->
    <section class="hero" id="home">
      <main class="content">
      <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        <H1>Selamat kamu berhasil Login</H1>
        <p>Lihat Halaman Produk Kami</p>
        <a href="produk-Laptop.php" class="cta">Lihat Produk</a>
      </main>
    </section>
    <!-- hero section end -->
    <!-- about section start -->
    <section id="about" class="about">
      <h2><span> Tentang </span> kami</h2>
      <div class="row">
        <div class="about-img">
          <img
            src="../img/Tentang-Kami.jpg"
            alt="Tentang Kami"
            height="300px"
            width="400px"
          />
        </div>
        <div class="content">
          <h3>Kenapa memilih jasa kami?</h3>
          <p>
            Kami berkomitmen untuk melayani pelanggan kami, untuk memperoleh
            pengalaman berbelanja yang aman, terpercaya, proses yang mudah,
            terstruktur dengan baik, Dan terhindar dari segala bentuk penipuan.
          </p>
          <p>
            Anda puas kabarkan ke teman, anda kecewa kabarkan pada staff kami.
            Kami memberikan layanan customer service yang tersedia selama 24 Jam
            Full, Dimana Anda Dapat Menghubungi Kami Kapan saja di mana saja.
          </p>
        </div>
      </div>
    </section>
    <!-- about section end -->
    <!-- contact section start -->
    <section id="contact" class="contact">
      <h2>Kontak <span> Kami </span></h2>
      <p>Kirim Laporan anda jika ada masalah melalui formulir berikut</p>
      <div class="row">
        <div class="contact-img">
          <img src="../img/Kontak-kami.jpeg" alt="Profil" />
          <p>Edgar Yohanes Ivanov Sinaga</p>
          <p>AquaShop.com administrator</p>
        </div>
        <form action="" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" name="nama" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" name="email" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" name="no_hp" placeholder="Keluhan" />
          </div>
          <button type="submit" class="btn" value="Simpan" name="proses">
            kirim Komplain
          </button>
        </form>
      </div>
    </section>
    <!-- contact section end -->
    <?php
$koneksi = mysqli_connect("localhost","root","","komplen");

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into keluhan set
nama = '$_POST[nama]',
email = '$_POST[email]',
no_hp = '$_POST[no_hp]'");

}
?>
    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="mail"></i></a>
        <a
          href="https://api.whatsapp.com/send/?phone=%2B6281360292519&text&type=phone_number&app_absent=0"
          ><i data-feather="phone"></i
        ></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#contact">Kontak</a>
      </div>
      <div class="credit">
        <p>created & copyright by <a href="">Edgar Sinaga</a>. | &copy; 2023</p>
      </div>
    </footer>
    <!-- Footer end -->
    <!-- feather icons -->
    <script>
      feather.replace()
    </script>
  </body>
</html>
