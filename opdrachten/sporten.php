

<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title> php opdrachten</title>
</head>
<style> </style>
    <ul>
        <?php
$dieren = array("aap","beer","konijn","vis");
$sporten = array("handbal","korfbal","hockey","schaatsen");
shuffle($sporten);
echo "<li> er zijn".count($sporten)."sporten in de array</li>";

geefArrayWeerAlsLijst($sporten);
        geefArrayWeerAlsLijst($dieren);

        function geefArrayWeerAlsLijst($arr) {
            foreach ($arr as $arr_element) {
                echo "<li>".$arr_element."</li>";
            }


        }
?>

    </ul>
</body>
</html>