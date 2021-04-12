<?php
$db = new PDO('mysql:host=db; dbname=Timelord2', 'root', "password");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM `forgallifrey`');
$query->execute();
$forgallifreyArray = $query->fetchAll();


?>
<html lang="en-GB">

<head>
    <title>TimeLordCollection</title>
    <link rel="stylesheet" type="text/css" href="timelordz.css">
</head>
<body><h1>Time Lord Collectables</h1>


<?php
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
$insertQuery = $db->prepare("INSERT INTO `forgallifrey`(`Name`, `Travel`, `Wisdom`, `Inventiveness`, `Combatt`, `Strategy`, `Mind Control`, `Knowledge`) VALUES (:Name, :Travel, :Wisdom, :Inventiveness, :Combatt, :Strategy, :MindControl, :Knowledge)");
$insertQuery->bindParam(':Name', $name);
$insertQuery->bindParam(':Travel', $travel);
$insertQuery->bindParam(':Wisdom', $wisdom);
$insertQuery->bindParam(':Inventiveness', $inventiveness);
$insertQuery->bindParam(':Combatt', $combatt);
$insertQuery->bindParam(':Strategy', $strategy);
$insertQuery->bindParam(':MindControl', $mindControl);
$insertQuery->bindParam(':Knowledge', $knowledge);

$insertQuery->execute();

foreach ($forgallifreyArray as $timelord){
   foreach($timelord as $aspect => $value){
       echo $aspect.": ".$value."<br>";
       if ($aspect==="Knowledge"){
           echo "</p></div>";
       }
       if ($aspect=== "id" && $value==1){
           echo "<div class='lord'><h2>The Doctor</h2>
                <video muted loop controls>
                    <source src='Pexels Videos 3867.mp4' type='video/mp4'>
                </video>
                <img src='The_Doctor.jpg' class='images' alt='The Doctor (David Tennant) stares into the camera in a blue suit and against an orange background.'>
                <p><button>Add The Doctor</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==2){
           echo "<div class='lord'><h2>The Master</h2>
                <video muted loop controls>
                    <source src='mastervid.mov' type='video/mp4'>
                </video>
                <img class='images' src='The_Master.jpg' alt='The Master (Dhawan) stands in purple victorian dress against a dark background holding some sort of technical device menacingly.'>
                <p><button>Add The Master</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==3){
           echo "<div class='lord'><h2>Rassilon</h2>
                <video muted loop controls>
                    <source src='video (1).mp4' type='video/mp4'>
                </video>
                <img class='images' src='Rassilon.jpg' alt='Rassilon stands proud against an orange sky background in Red and gold robes holding an imperial staff and wearing a gold collar piece.'>
                <p><button>Add Rassilon</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==4){
          echo "<div class='lord'><h2>Omega</h2>
                <video muted loop controls>
                    <source src='omegavid.mp4' type='video/mp4'>
                </video>
                <img class='images' src='Omega.jpg' alt='A man in dark green robes leans toward the camera against a red background and wearing a large bronze helm.'>
                <p><button>Add Omega</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==5){
           echo "<div class='lord'><h2>The Meddling Monk</h2>
                  <video muted loop controls>
                    <source src='monkvid.mp4' type='video/mp4'>
                </video>
                <img class='images' src='The_Monk.jpg' alt='The Meddling Monk stands on a clifftop with the sun rising behind him and metal
                clockwork hanging suspended in midair behind him.'>
                 <p><button>Add The Meddling Monk</button></p>";
           echo "<p class='dataBox'>";

       }
       if ($aspect=== "id" && $value==6){
           echo "<div class='lord'><h2>Susan</h2>
                <video muted loop controls>
                <source src='video.mp4' type='video/mp4'>
                </video>
                <img class='images' src='Susan_Foreman.jpg' alt='A black and white image, Susan looks toward the camera in a leather cap and white collar.'>
                <p><button>Add Susan</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==7){
           echo "<div class='lord'><h2>River Song</h2>
                 <video muted loop controls>
                    <source src='riversongvid.mp4' type='video/mp4'>
                </video>
                 <img class='images' src='River_Song.png' alt='River Song stands against a multicoloured background in a leather jacket.'>
                 <p><button>Add River Song</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==8){
           echo "<div class='lord'><h2>The Rani</h2> 
                <video muted loop controls>
                    <source src='ranivid.mp4' type='video/mp4'>
                </video>
                <img class='images' src='The_Rani.jpg' alt='The Rani stands looking imperious in a red and gold tunic with broad sleeves and a technical device on her arm.'>
                <p><button>Add The Rani</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value>8){
           echo "<div class='lord'>";
           echo "<h2>".$name."</h2>";
           echo "<img class='unknownLord' src='Timelord.jpg' alt='A Time Lord stands in rich flowing red robes, a red skull cap on his head and large golden collar around his neck staring into the distance from atop a bare rock, sky scrapers tower behind him encased in a huge glass dome and red-orange sky burning behind him.'>
                <img class='stock' src='Gallifrey.jpg' alt='A burning red planet against a black background, lit from one side as it orbits its star.'
           <p></p>";
           echo "<p class='dataBox'>";
       }
   }
}

?>



<h2>Add Your Own TimeLord</h2>

<form method="post" action="index.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" class="formInput"/><br>

    <label for="travel">Travel:</label>
    <input type='number' name="travel" id="travel" class="formInput" min="0" max="13"/><br>

    <label for="wisdom">Wisdom:</label>
    <input type='number' name="wisdom" id="wisdom" class="formInput" min="0" max="13"/><br>

    <label for="inventiveness">Inventiveness:</label>
    <input type='number' name="inventiveness" id="inventiveness" class="formInput" min="0" max="13"/><br>

    <label for="combatt">Combatt:</label>
    <input type='number' name="combatt" id="combatt" class="formInput" min="0" max="13" /><br>

    <label for="strategy">Strategy:</label>
    <input type='number' name="strategy" id="strategy" class="formInput" min="0" max="13" /><br>

    <label for="mindcontrol">Mind Control:</label>
    <input type='number' name="mindcontrol" id="mindcontrol" class="formInput" min="0" max="13" /><br>

    <label for="knowledge">Knowledge:</label>
    <input type='number' name="knowledge" id="knowledge" class="formInput" min="0" max="13" /><br>

    <input type="submit" class="submit"/>
</form>
<footer>
    By Louise de Mattos 2021.
</footer>
</body>
</html>


