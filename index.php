<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    margin: 0;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.center-image-container {
    text-align: center;
}

.center-image {
    max-width: 100%;
    max-height: 100%;
    display: inline-block;
}

    </style>
</head>
<body style="background-color:pink; align-items: center;">
    <marquee>
        <h1 style="color:cyan">
           Ragiel Faqih Nabilal Ramadhan || pusing dikit gak ngaruh
        </h1>
    </marquee>
    <form name="form1" action="" method="POST">
        <input type="text" name="angka1"> +
        <input type="text" name="angka2"> 
        <input type="submit" name="submit" value="=">
        <?php 
        if(isset($_POST['submit'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $jumlah = $angka1 + $angka2;
            echo "<input type='text' name='hasil' value='$jumlah'>";
        }
        ?>
    </form>
    <br>
    <div class="center-image-container"> <!-- Tambahkan div container untuk gambar -->
        <img src="image.jpg" width="1000" height="650" class="center-image">
    </div>
</body>
</html>

