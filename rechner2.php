<html>
    <head>
        <title>Rechner 2</title>
        <style>
            h3 {color:blue; font-family: comic sans ms; text-align: center;}
        </style>
        <?php
            $f1 = $_GET["f1"];
            $f2 = $_GET["f2"];
            $r = $f1*$f2;
        ?>
    </head>
    <body>
        <h3>Das Produkt aus <?php echo $f1 ?> und <?php echo $f2 ?> ist 
  <?php echo $r ?></h3>
    </body>
</html>
