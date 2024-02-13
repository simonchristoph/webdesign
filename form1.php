<html>
    <head>
        <title>Einkäufe eingeben</title>
        <style>
            div {text-align: center;}
            h2 {text-align: center; font-family: arial; color: darkgreen;}
            table {margin-left: auto; margin-right: auto;}
        </style>
<?php
$conn = mysqli_connect("localhost","sos","antmachtspass","hebbel");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  # echo "Die Verbindung zu hebbel konnte hergestellt werden.";
# Wenn eine Sache eingetragen wurde, wird sie hier in die Variable $sache geschrieben
  $sache = $_POST['sache'];
# und anschließend in die Datenbank überführt
if (!empty($sache)) {
$query = "INSERT INTO einkauf (sache) VALUES ('".$sache."')";
mysqli_query($conn, $query);
}
$query2 = "SELECT sache FROM einkauf order by id";
$result = mysqli_query($conn, $query2);
// if (empty($result)) {echo "das Resultat der Datenbankabfrage ist leer";}
// else {echo"in result steckt etwas drin";};
?>
    </head>
<body>
    <h2>Trage ein, was du einkaufen möchtest!</h2>
    <form action="form1.php" method="POST">
        <div>
            <label for="sache">Sache:</label>
            <input type="text" name="sache" size="20"><br>
            <input type="submit" value="eintragen">
        
        </div>
        
    </form>

    <h2>Einkaufsliste</h2>
    <table>
            <?php
                $num = mysqli_num_rows($result);
                for ($i = 1; $i < $num+1; $i++) {
                    $row = mysqli_fetch_array($result);
                    $zeile = '<tr><td>'.$i.'</td><td>'.$row[0].'</td></tr>';
                    echo $zeile;
                };
                
            ?>
    </table>
</body>

</html>