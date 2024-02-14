<?php
    $zahl1 = 17;

    for ($i=0; $i<30; $i++){

        $summe = $zahl1 + $i;
        echo "Die Summe aus ".$zahl1." und ".$i." ist ".$summe."! Dies ist eine ";

        if ($summe > 30 ) {
            echo"große Zahl<br>";
        } else {
            echo"kleine Zahl<br>";
        };
    };
  
?>


<?php
for($i=0; $i < 20; $i++) {
   echo "Hallo du ".$i."<br>";
}
?>