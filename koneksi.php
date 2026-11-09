<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_portofolio";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Ikhsan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="noise" aria-hidden="true"></div>
  <main class="page">
    <section class="grid" id="tentang">
      <article class="panel wide">
        <h2>Tentang Saya</h2>
        <p>
          Saya adalah mahasiswa S1 Informatika di Yogyakarta... </p>
      </article>

      <article class="panel">
        <h2>Pendidikan</h2>
        <ul class="timeline">
          <?php
          $query_edu = mysqli_query($conn, "SELECT * FROM pendidikan");
          while($row = mysqli_fetch_assoc($query_edu)) {
          ?>
          <li>
            <strong><?php echo $row['sekolah']; ?></strong>
            <p><?php echo $row['periode']; ?></p>
          </li>
          <?php } ?>
        </ul>
      </article>

      <article class="panel">
        <h2>Pengalaman Kerja</h2>
        <ul class="timeline">
          <?php
          $query_exp = mysqli_query($conn, "SELECT * FROM pengalaman");
          while($row = mysqli_fetch_assoc($query_exp)) {
          ?>
          <li>
            <strong><?php echo $row['tahun']; ?></strong>
            <p><?php echo $row['posisi']; ?></p>
          </li>
          <?php } ?>
        </ul>
      </article>
    </section>

    <footer class="footer">
      <p>© <?php echo date("Y"); ?> Portofolio pribadi saya. Semua hak dilindungi.</p>
    </footer>
  </main>
</body>
</html>