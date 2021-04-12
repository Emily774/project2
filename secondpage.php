
<?php
var_dump($_POST);
$name=$_POST["name"];
$travel=$_POST["travel"];
$wisdom= $_POST["wisdom"];;
$inventiveness=$_POST["inventiveness"];
$combatt=$_POST["combatt"];
$strategy=$_POST["strategy"];
$mindControl=$_POST["mindcontrol"];
$knowledge=$_POST["knowledge"];

$db = new PDO('mysql:host=db; dbname=Timelord', 'root', "password");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$insertQuery = $db->prepare("INSERT INTO `forgallifrey`(`Name`, `Travel`, `Wisdom`, `Inventiveness`, `Combatt`, `Strategy`, `Mind Control`, `Knowledge`) VALUES (:Name, :Travel, :Wisdom, :Inventiveness, :Combatt, :Strategy, :MindControl, :Knowledge)");
$insertQuery->bindParam(':Name', $name);
$insertQuery->bindParam(':Travel', $travel);
$insertQuery->bindParam(':Wisdom', $wisdom);
$insertQuery->bindParam(':Inventiveness', $inventiveness);
$insertQuery->bindParam(':Combatt', $combatt);
$insertQuery->bindParam(':Strategy', $strategy);
$insertQuery->bindParam(':MindControl', $mindControl);
$insertQuery->bindParam(':Knowledge', $knowledge);


$result = $insertQuery->execute();
var_dump($result);




?>

<html lang='en-GB'>
<head>
    <title>TimeLordCollection</title>
    <link rel='stylesheet" type="text/css" href="timelordz.css'>
</head>
<body>
<img class='stock' src='Gallifrey.jpg' alt='A burning red planet against a black background, lit from one side as it orbits its star.'>
<img class='images' src='Timelord.jpg' alt='A Time Lord stands in rich flowing red robes, a red skull cap on his head and large golden collar around his neck staring into the distance from atop a bare rock, sky scrapers tower behind him encased in a huge glass dome and red-orange sky burning behind him.'>
<p><button>Add The TimeLord</button></p></p>
</body>
</html>