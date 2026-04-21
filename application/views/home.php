<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }
        h1 {
            color: darkblue;
        }
        a {
            text-decoration: none;
            color: blue;
        }
        hr {
            margin: 15px 0;
        }
    </style>
</head>
<body>

<h2>Website Blog Sederhana</h2>

<a href="<?php echo site_url('blog'); ?>">Home</a> |
<a href="<?php echo site_url('blog/tentang'); ?>">Tentang</a> |
<a href="<?php echo site_url('blog/tambah'); ?>">Tambah Artikel</a>

<hr>

<h1>Daftar Artikel</h1>

<?php foreach ($artikel as $a): ?>
    <h3><?php echo $a['judul']; ?></h3>
    <p><?php echo $a['isi']; ?></p>

    <a href="<?php echo site_url('blog/detail/'.$a['id']); ?>">
        Baca Detail
    </a>

    <hr>
<?php endforeach; ?>

</body>
</html>