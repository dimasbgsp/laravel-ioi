<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-4">
    <h1>
        Daftar mahasiswa
    </h1>
    <ol class="list-group my-4">
        <?php
        foreach ($mahasiswa as $key => $nama) {
            # code...
            echo "<li class=\"list-group-item\"> $nama </li>";
        }
    ?>
    </ol>
    <div>
        <img class="rounded-circle img-tumbnail m-2"  src="/img/download.jpg" alt="">
        <img class="rounded-circle img-tumbnail m-2"  src="/img/download.jpg" alt="">
        <img class="rounded-circle img-tumbnail m-2"  src="/img/download.jpg" alt="">
        <img class="rounded-circle img-tumbnail m-2"  src="/img/download.jpg" alt="">
    </div>
    <div>
        Copyright <?php echo date ("Y")?> IOI Academy
    </div>
</div>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>