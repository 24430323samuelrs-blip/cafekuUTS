<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pengguna</title>
</head>
<body>
<div class='main'>
    <p class='judultable'>Daftar Pengguna</p>
    <button onclick="window.location.href='tambahpengguna.php'"> Tambah Pengguna </button>
    <?php
    include("api/pengguna/selectpengguna.php");
    ?>
    <table class='tabel'>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No. Hp</th>
            <th>Aksi</th>
</tr>
<?php
for ($i=0; $i < count($datas); $i++){
    ?>
    <tr>
        <td><?php echo $i + 1; ?></td>
        <td><?php echo $datas[$i]['nama']?></td>
        <td><?php echo $datas[$i]['username']?></td>
        <td><?php echo $datas[$i]['alamat']?></td>
        <td><?php echo $datas[$i]['nohp']?></td>
        <td><a href='editdata.php?id=<?php echo $datas[$i]['id']; ?>'> Edit </a>
        <a href="api/pengguna/deletepengguna.php?id=<?php echo  $datas[$i]['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
</td>
    </tr>
<?php
}
?>
</table>
</div>
</body>
</html>