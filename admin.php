<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Data Siswa (admin) </h1>

<?php function admin() { ?>
    <table border="1" cellspacing="1" cellpadding="10">
        <body align="center">
                <td align= "center" >No</td>
                <td align= "center" >Foto</td>
                <td align= "center" >Nama</td>
                <td align= "center" >aksi</td>
                <?php foreach ($GLOBALS['user'] as $key => $value) { ?>
            
            <tr>
                <td align= "center"><?= $value['no'] ?></td>
                <td> <img scr="img/profil.jpg" width="200" height= "200"> </td>
                <td align= "center"><?= $value['nama'] ?></td>
                <td align= "center">
                    <a href="detail.php?nama=<?= $value['nama']?> &alamat= <?= $value['alamat']?> &telepon <?= $value['telepon']?>">
                <button>detail</button></a>
                </td>
            </tr>
            <?php } ?>

            <?php admin() ?>
</body>
</html>
