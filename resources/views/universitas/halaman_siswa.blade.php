<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ol>
        <?php
            // echo "<li>Nama: $var_view_nama</li>";
            // echo "<li>Umur: $var_view_umur</li>";
            // echo "<li>Tempat Tinggal: $var_view_tempat_tinggal</li>";
            echo "<li>Nama Samaran: $nama</li>";
            echo "<li>Agama: $agama</li>";
        ?>
    </ol>
    <div>
        Copyright <?php echo date("Y");?> IOI Academy
    </div>
</body>
</html>