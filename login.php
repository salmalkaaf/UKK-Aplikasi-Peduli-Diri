<?php
    if(isset($_POST['daftar'])) //iss
    {
    $nik= $_POST['nik'];
    $nama = $_POST['nama'];
    $text = $nik . "," . $nama . "\n";
    $fp = fopen('config.txt' , 'a+');

    if(fwrite($fp, $text)){
        echo '<script>alert("Berhasil"); </script>';
    }
    }
?>

<html>
    <form action="" method="POST" style="padding-top:auto>
    <!-- <div style="align= -->
    <form action="">
        <br> 
    <table align="center">
        <tr>
            <td><input type="text" name="nik" placeholder="NIK"></td>
        </tr>
        <tr>
            <td><input type="text" name="nama" placeholder="NAMA LENGKAP"></td>
        </tr>
        <tr>
            <td><input type="submit" name="daftar" value="SAYA PENGGUNA BARU">
            <input type="submit" name="masuk" value="MASUK"></td>
        </tr>
</table>
</form>
</html>