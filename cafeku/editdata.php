<div class='main'>
    <?php
    include("api/pengguna/selectonpengguna.php");
    ?>

<form action="api/pengguna/updatepengguna.php" method="post">
    <div class="card">
        <p class="judul">Form Edit Pengguna</p>

        <input name='nama' class="inputuser" type="text" placeholder="Nama Pengguna" value='<?php echo $datas[0]['nama']?>'/>
                <input name='username' class="inputuser" type="text" placeholder="Username" value='<?php echo $datas[0]['username']?>'/>
                <input name='password' class="inputuser" type="password" placeholder="Password" value='<?php echo $datas[0]['password']?>'/>
                <input name='alamat' class="inputuser" type="text" placeholder="Alamat" value='<?php echo $datas[0]['alamat']?>'/>
                <input name='nohp' class="inputuser" type="text" placeholder="Nomor HP" value='<?php echo $datas[0]['nohp']?>'/>
                <input hidden name='id' class="inputuser" type="text" placeholder="Nomor HP" value='<?php echo $datas[0]['id']?>'/>
                <button class="tombol">Edit Pengguna</button>
</div>
</form>
