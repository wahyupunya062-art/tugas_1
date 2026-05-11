<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        input {
            padding: 5px;
            margin: 5px 0;
        }

        button {
            padding: 6px 12px;
            margin-right: 5px;
            cursor: pointer;
        }

        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background: #f2f2f2;
        }
    </style>

</head>

<body>

<h2>Data Mahasiswa</h2>

<!-- FORM -->
<input type="text" id="nama" placeholder="Nama">
<br>
<input type="text" id="prodi" placeholder="Prodi">
<br><br>

<button id="btnSimpan" type="button">Simpan</button>
<button id="btnReset" type="button">Reset</button>

<!-- TABEL -->
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>
    </thead>

    <tbody id="tbody"></tbody>
</table>

<script>

$(document).ready(function(){

    // LOAD DATA
    function loadData(){
        $.ajax({
            url: "<?= site_url('mahasiswa/getData'); ?>",
            method: "GET",
            dataType: "json",
            success:function(response){

                let html = "";

                response.forEach(function(row){
                    html += "<tr>";
                    html += "<td>"+row.id+"</td>";
                    html += "<td>"+row.nama+"</td>";
                    html += "<td>"+row.prodi+"</td>";
                    html += "</tr>";
                });

                $("#tbody").html(html);
            }
        });
    }

    loadData();

    // SIMPAN DATA
    $("#btnSimpan").click(function(){

        let nama = $("#nama").val();
        let prodi = $("#prodi").val();

        if(nama == "" || prodi == ""){
            alert("Nama dan Prodi tidak boleh kosong!");
            return;
        }

        $.ajax({
            url: "<?= site_url('mahasiswa/simpan'); ?>",
            method: "POST",
            data:{
                nama: nama,
                prodi: prodi
            },
            success:function(res){
                alert("Data berhasil disimpan");

                loadData();

                $("#nama").val('');
                $("#prodi").val('');
            }
        });
    });

    // RESET FORM
    $("#btnReset").click(function(){
        $("#nama").val('');
        $("#prodi").val('');
    });

});

</script>

</body>
</html>