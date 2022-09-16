<?php
    require "user.php";

    $role = check($_POST["username"], $_POST["password"], $login);

    function check($username, $password, $array){
        foreach ($array as $record){
            if ($username == $record["username"] && $password == $record["password"]){
                return $record["role"];
            }
        }
      header("location: login.php?error")  ;

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa (siswa)</title>
</head>
<body>
    
    <?php function siswa() { ?>
    
    <h1>Data Siswa (siswa) </h1>
    <table border="1" cellspacing="0" cellpadding="10">
        <body align="center">
            <tr>
                <td>No</td>
                <td>Foto</td>
                <td>Nama</td>
            </tr>
            <?php foreach ($GLOBALS["admin"] as $key => $value) { ?>
            
            <tr>
                <td><?= $value["no"] ?></td>
                <td><img scr="<?= $value["foto"] ?>"></td>
                <td><?= $value["nama"] ?></td>
            </tr>
            <?php } ?>
        </body>
         </table>     
         <?php } ?>
         
         <?php function admin() { ?>
            <table border="1" cellspacing="1" cellpadding="10">
        <tbody align="center">
            <tr>
                <th align= "center" >No</th>
                <th align= "center" >Foto</th>
                <th align= "center" >Nama</th>
                <th align= "center" >aksi</th>
            </tr>    
        
                <?php foreach ($GLOBALS['user'] as $key => $value) { ?>
            
            <tr>
                <td align= "center"><?= $value['no'] ?></td>
                <td> <img scr="img/profil.jpg" width="200" height= "200"> </td>
                <td align= "center"><?= $value['nama'] ?></td>
                <td align= "center">
                    <a href="detail.php?nama=<?= $value['nama']?> &alamat= <?= $value['alamat']?> &telepon <?= $value['telepon']?>">
                <button>detail</button></a></td>
            </tr>
            <?php } ?>
    </tbody>
</table>
<?php } ?>

<?php if($role == "siswa") {
    siswa();
} else if($role == "admin") {
    admin();
}?>

</body>
</html>