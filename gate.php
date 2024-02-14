<html>
    <head>
        <style>
            h3, p {text-align: center; font-family: Arial} 
        </style>      
    </head>
    <body>
        <?php
            $pw = $_POST["pw"];
            $pwr = "antmachtspass";
            if($pwr == $pw) {
                echo "<h3>Passwort korrekt!</h3><p>Hier gelangen Sie zum 
                <a href='rechner1.html'>Taschenrechner</a>.</p>";
            }
            else {
                echo "<h3>Passwort falsch!!!</h3>";
            }
        ?>
        <p><a href="index.html">zurück</a></p>
    </body>
</html>