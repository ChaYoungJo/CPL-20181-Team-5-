<?php
require_once 'jeydatabase.php';

$sql="select startLatitude, startLongitude, stopLatitude, stopLongitude, distance, stoptime-starttime as tottime, purpose, oilAmount,tollAmount,gitaAmount, dayofweek(startDate) as day from drivingLog where distance>0 and startDate>=\"".$_POST["start"]."\" and startDate<=\"".$_POST["des"]."\"";

$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(PDO::FETCH_OBJ);
echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>
