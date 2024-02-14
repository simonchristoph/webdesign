
<html>
    <head>
        <title>Portal zum TR</title>
        <style>
            form, h3 {text-align: center; font-family: Arial} 
        </style>
    </head>
    <body>
        <?php
        $ben = $_POST["ben"];
        $pw = $_POST["pw"];
        $benr = "g2";
        $pwr = "antmachtspass";

        if(empty($ben) and empty($pw)) {
            echo '<h3>Geben Sie Ihr Passwort ein, um zum Taschenrechner zu gelangen.</h3>
            <form method="post" action="index.php">
                <label for="ben">Benutzer</label>
                <input type="text" size="5" name="ben"><br>
                <label for="pw">Passwort:</label>
                <input type="password" size="20" name="pw"><br><br>
                <input type="submit" value="absenden">
            </form>';
        }
        else {
            if($ben == $benr and $pw == $pwr){
                echo 'Benutzername und Passwort korrekt';
            }
            else {
                echo 'Benutzername und/oder Passwort falsch';
            }
        }

        ?>
        
    </body>
</html>

