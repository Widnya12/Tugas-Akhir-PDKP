<html>
     <head>
          <title>Game character stats maker</title>
     <head>
     <body>
     <?php
        echo "<h2> Hasil: </h2>";
     ?>
     <?php
     $defaultStrength = 20;
     $defaultDefense = 20;
     $defaultSpeed = 20;
     $defaultIntelligence = 20;
     $points = 20;

     Class Weapon {
          private $senjata1;
          private $senjata2;
          private $senjata3;

          function setSenjata1($senjata1){
                  $this->senjata1 = $senjata1;
          }
          function setSenjata2($senjata2){
                  $this->senjata2 = $senjata2;
          }
          function setSenjata3($senjata3){
                  $this->senjata3 = $senjata3;
          }
          function getSenjata1() {
                  return $this->senjata1;
          }
          function getSenjata2() {
                  return $this->senjata2;
          }
          function getSenjata3() {
                  return $this->senjata3;
          }                   
     }       

      $senjata_baru = new Weapon();

      $senjata_baru->setSenjata1("Pedang");
      $senjata_baru->setSenjata2("Panah");
      $senjata_baru->setSenjata3("Tongkat Sihir");
     ?>

    <table>
      <tr>
        <td>Nama Player </td>
        <td>: <?php echo $nama = $_POST['nama']; ?></td>
      </tr>
      <tr>
      <td>
        <?php
        if (isset($_POST['Weapon1'])) {
          echo "Kamu memilih ".$senjata_baru->getSenjata1()." sebagai senjatamu <br/>";
        }
        if (isset($_POST['Weapon2'])) {
          echo "Kamu memilih ".$senjata_baru->getSenjata2()." sebagai senjatamu <br/>";
        }
        if (isset($_POST['Weapon3'])) {
          echo "Kamu memilih ".$senjata_baru->getSenjata3()." sebagai senjatamu <br/>";
        }
        ?></td>
      </tr>
      <tr>
      <td>
        <?php
        if (isset($_POST['alasan1'])) {
          $finalStrength = $defaultStrength+$points;
          $finalIntelligence = $defaultIntelligence;
        }
        if (isset($_POST['alasan2'])) {
          $finalIntelligence = $defaultIntelligence+$points;
          $finalStrength = $defaultStrength;
        }
        ?></td>
      </tr>
      <tr>
      <td>
        <?php
        if (isset($_POST['kemampuan_tubuh1'])) {
          $finalDefense = $defaultDefense+$points;
          $finalSpeed = $defaultSpeed;
        }
        if (isset($_POST['kemampuan_tubuh2'])) {
          $finalSpeed = $defaultSpeed+$points;
          $finalDefense = $defaultDefense;
        }
        ?></td>
       </tr>
       <tr>
       <td>
       <?php
        echo "Strength: $finalStrength<br>";
        echo "Defense: $finalDefense<br>";
        echo "Speed: $finalSpeed<br>";
        echo "Intelligence: $finalIntelligence<br>";
        ?></td>
        </tr>
        <tr>
        <td>
        <?php
        echo"<h3> Stats bisa ditingkatkan dalam permainan </h3>";
        ?>
        </td>
        </tr>
    </table>      
     </body>
</html> 