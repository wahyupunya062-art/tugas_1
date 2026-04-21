<!DOCTYPE html>
<html>
<head>
    <title>Detail Artikel</title>
</head>
<body>

<h2>Website Blog Sederhana</h2>
<hr>

<h1><?php echo $artikel['judul']; ?></h1>
<p><?php echo $artikel['isi']; ?></p>

<br>
<a href="<?php echo site_url('blog'); ?>">Kembali</a>

</body>
</html>