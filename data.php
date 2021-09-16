<?php
if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmpl = $_POST['tempatlhr'];
    $tgll = $_POST['tanggallhr'];
    $kelamin = $_POST['kelamin'];
    $profesi = $_POST['profesi'];
    $usia = $_POST['usia'];
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
<center>
    <h3>Data Registrasi Vaksinasi Tahap 1</h3>
    <table border="1" style="width: 360px;">
        <col width="50%"/>
        <tr><td>Nama</td>           <td><?= $nama ?></td></tr>
        <tr><td>Alamat</td>         <td><?= $alamat ?></td></tr>
        <tr><td>Tempat Lahir</td>   <td><?= $tmpl ?></td></tr>
        <tr><td>Tanggal Lahir</td>  <td><?= $tgll ?></td></tr>
        <tr><td>Jenis Kelamin</td>  <td><?= $kelamin ?></td></tr>
        <tr><td>Profesi</td>        <td><?= $profesi ?></td></tr>
        <tr><td>Usia</td>           <td><?= $usia ?></td></tr>
    </table>
</center>
</body>
</html>