<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './navbar.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body style="background: url(../assets/homecar.jpg); background-repeat: repeat; background-size: 15%;">
    <?= $navbar ?>
    <div class="d-flex justify-content-center">
        <div class="shadow p-3 m-3 bg-light rounded text-center">
            <h2>Evaluate Your Future Car</h2>
            <p>
                Bingung seberapa worth it mobil yang akan anda beli?<br />
                Khawatir mobil yang anda beli akan mengecewakan?<br />
                Jangan khawatir. Konsultasikan mobilnya ke kami sebelum checkout!<br />
                Kita evaluasi bersama mobil yang akan kalian beli, agar tidak merasa dirugikan.
            </p>
            <div class="d-flex justify-content-center">
                <a href="./evaluate.php" class="btn btn-primary">Mulai Evaluasi</a>
            </div>
        </div>
    </div>

</body>

</html>