<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
//for ($i = 1; $i<=9 ;$i++){
// echo "<img src='img/aap".$i.".jpg'>";
//}
$bomen = array("boom.jpg","asdadsadas.jpg", "boommm.jpg","sadasdasda.jpg","sadasdsasdasd.jpg", "sdadsadad.jpg");

foreach ($bomen as $boom){
    echo "<img src='img/bomen/".$boom."'>";
}
?>
</body>
</html>
