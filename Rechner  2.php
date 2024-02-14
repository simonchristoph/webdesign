

<html>
    <head>
        <title>rechner2 addition</title>
        <style>
            h3 {color:blue; font-family: comic sans ms; text-align: center;}
        </style>
        <?php
            $s1 = $_GET["s1"];
            $s2 = $_GET["s2"];
            $s3 = $_GET["s3"];
            $r = $s1+$s2+$s3;
        ?>
    </head>
    <body>
        <h3>Die Summe aus <?php echo $s1 ?> und <?php echo $s2 ?> und <?php echo $s3 ?> ist <?php echo $r ?></h3>
        
        <form method="get" action="./Website rechner.html" style="text-align:center;">
        <br>
        <input style="background-color:lightpurple" type="submit" value="zurück zur Website">
        </form>
       
        <form method="get" action="./Rechner addition.html" style="text-align:center;">
        <br>
        <input style="background-color:lightpurple" type="submit" value="zurück">
        </form>
        <?php
       
       $t = Summand("s2");
        
        if ($t < "100000") {
        echo "Geht nicht";
        }
        ?>

    </body>
</html>