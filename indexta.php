<html>
    <head>
        <title>Game character stats maker</title>
    <head>

    <body>
    <?php
        echo "<h1> Pembuatan Stats Karakter Game </h1>";
    ?>
        <form action="hasilta.php" method="post">
            <label for="nama">Nama:</label>
            <input name="nama" >
            </br></br>

        Pilih senjatamu : <br/>

            <input type="radio" name="Weapon1" value="Pedang">Pedang<br/>
            <input type="radio" name="Weapon2" value="Panah">Panah<br/>
            <input type="radio" name="Weapon3" value="Tongkat Sihir">Tongkat Sihir<br/>

        Untuk apa senjata tersebut? <br/>

            <input type="radio" name="alasan1" value="Menghancurkan musuh">Menghancurkan musuh<br/>
            <input type="radio" name="alasan2" value="Menambah pengetahuan">Menambah pengetahuan<br/>

        Dari dua pilihan dibawah, kemampuan tubuh manakah yang kamu inginkan? <br/>

            <input type="radio" name="kemampuan_tubuh1" value="Pertahanan tubuh">Pertahanan tubuh<br/>
            <input type="radio" name="kemampuan_tubuh2" value="Kecepatan tubuh">Kecepatan tubuh<br/>

            <input type="submit" value="Enter"/>
        <form>

    <body>
<html>