<!DOCTYPE html>
<html>
<head>
    <title>Tambah Artikel</title>
</head>
<body>

<h2>Website Blog Sederhana</h2>
<hr>

<h1>Tambah Artikel</h1>

<form onsubmit="alert('Data berhasil ditambahkan (simulasi)'); return false;">
    Judul: <input type="text"><br><br>
    Isi: <textarea></textarea><br><br>
    <button type="submit">Simpan</button>
</form>

<p>(Ini hanya simulasi, tidak disimpan)</p>

<br>
<a href="<?php echo site_url('blog'); ?>">Kembali</a>

</body>
</html>