<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ikhsan's Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="noise" aria-hidden="true"></div>
  <main class="page">
    <section class="grid" id="tentang">
      <article class="panel wide">
        <h2>About Me</h2>
        <p>
          I am an undergraduate Informatics student in Yogyakarta... </p>
      </article>

      <article class="panel">
        <h2>Education</h2>
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
        <h2>Work Experience</h2>
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
      <p>© <?php echo date("Y"); ?> My personal portfolio. All rights reserved.</p>
    </footer>
  </main>
</body>
</html>
