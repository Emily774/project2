<?php
$db = new PDO('mysql:host=db; dbname=Timelord', 'root', "password");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM forgallifrey');
$query->execute();
$forgallifreyArray = $query->fetchAll();
//var_dump($forgallifreyArray);
?>
<html lang="en-GB">

<head>
    <title>TimeLordCollection</title>
    <link rel="stylesheet" type="text/css" href="timelordz.css">
</head>
<body><h1>Time Lord Collectables</h1>


<?php
foreach ($forgallifreyArray as $timelord){
   foreach($timelord as $aspect => $value){
       echo $aspect.": ".$value."<br>";
       if ($aspect==="No. of Adds"){
           echo "</p></div>";
       }
       if ($aspect=== "id" && $value==1){
           echo "<div class='lord'><h2>The Doctor</h2>
                <video muted loop controls>
                    <source src='Pexels Videos 3867.mp4' type='video/mp4'>
                </video>
                <img src='34DD0CEF-7DEB-4FAC-A0D5-F3E1E85C7082.jpg' class='images' alt='The Doctor (David Tennant) stares into the camera in a blue suit and against an orange background.'>
                <p><button>Add The Doctor</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==2){
           echo "<div class='lord'><h2>The Master</h2>
                <video muted loop controls>
                    <source src='mastervid.mov' type='video/mp4'>
                </video>
                <img class='images' src='https___winteriscoming.net_files_image-exchange_2018_08_ie_35830.jpg' alt='The Master (Dhawan) stands in purple victorian dress against a dark background holding some sort of technical device menacingly.'>
                <p><button>Add The Master</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==3){
           echo "<div class='lord'><h2>Rassilon</h2>
                <video muted loop controls>
                    <source src='video (1).mp4' type='video/mp4'>
                </video>
                <img class='images' src='rassilon_the_resurrected_by_timelordghost-da711b2.jpg' alt='Rassilon stands proud against an orange sky background in Red and gold robes holding an imperial staff and wearing a gold collar piece.'>
                <p><button>Add Rassilon</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==4){
          echo "<div class='lord'><h2>Omega</h2>
                <video muted loop controls>
                    <source src='omegavid.mp4' type='video/mp4'>
                </video>
                <img class='images' src='Doctor-Who-Omega-appeared-on-Gallifrey-alongside-Tecteun-and-Rassilon-in-the-Matrix-2697746.jpg' alt='A man in dark green robes leans toward the camera against a red background and wearing a large bronze helm.'>
                <p><button>Add Omega</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==5){
           echo "<div class='lord'><h2>The Meddling Monk</h2>
                  <video muted loop controls>
                    <source src='monkvid.mp4' type='video/mp4'>
                </video>
                <img class='images' src='2fcax1uo0wv1000.jpg' alt='The Meddling Monk stands on a clifftop with the sun rising behind him and metal
                clockwork hanging suspended in midair behind him.'>
                 <p><button>Add The Meddling Monk</button></p>";
           echo "<p class='dataBox'>";

       }
       if ($aspect=== "id" && $value==6){
           echo "<div class='lord'><h2>Susan</h2>
                <video muted loop controls>
                <source src='video.mp4' type='video/mp4'>
                </video>
                <img class='images' src='images.jpg' alt='A black and white image, Susan looks toward the camera in a leather cap and white collar.'>
                <p><button>Add Susan</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==7){
           echo "<div class='lord'><h2>River Song</h2>
                 <video muted loop controls>
                    <source src='riversongvid.mp4' type='video/mp4'>
                </video>
                 <img class='images' src='200px-River_Song_Doctor_Who.png' alt='River Song stands against a multicoloured background in a leather jacket.'>
                 <p><button>Add River Song</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value==8){
           echo "<div class='lord'><h2>The Rani</h2> 
                <video muted loop controls>
                    <source src='ranivid.mp4' type='video/mp4'>
                </video>
                <img class='images' src='220px-The_Rani-Kate_OMara_(1987).jpg' alt='The Rani stands looking imperious in a red and gold tunic with broad sleeves and a technical device on her arm.'>
                <p><button>Add The Rani</button></p>";
           echo "<p class='dataBox'>";
       }
       if ($aspect=== "id" && $value>8){
           echo "<img class='images' src='Gallifrey_Sound_of_Drums.jpg' alt='A Time Lord stands in rich flowing red robes, a red skull cap on his head and large golden collar around his neck staring into the distance from atop a bare rock, sky scrapers tower behind him encased in a huge glass dome and red-orange sky burning behind him.'>
                <img class='stock' src='GallifreyReturns-1-.jpg' alt='A burning red planet against a black background, lit from one side as it orbits its star.'
                <p><button>Add The TimeLord</button></p>";
           echo "<p class='dataBox'>";
       }
   }
}

?>



<button>Add Your Own TimeLord</button>

<form method="post">
    <label for="Name">Name:</label>
    <input type="text" name="Name" id="Name"/><br>

    <label for="Travel">Travel:</label>
    <input type='number' name="Travel" id="Travel"/><br>

    <label for="Wisdom">Wisdom:</label>
    <input type='number' name="Wisdom" id="Wisdom"/><br>

    <label for="Inventiveness">Inventiveness:</label>
    <input type='number' name="Inventiveness" id="Inventiveness"/><br>

    <label for="Combatt">Combatt:</label>
    <input type='number' name="Combatt" id="Combatt"/><br>

    <label for="Strategy">Strategy:</label>
    <input type='number' name="Strategy" id="Strategy"/><br>

    <label for="Mind Control">Mind Control:</label>
    <input type='number' name="Mind Control" id="Mind Control"/><br>

    <label for="Knowledge">Knowledge:</label>
    <input type='number' name="Knowledge" id="Knowledge"/><br>

    <input type="submit" />
</form>

</body>
</html>

<?php
//$name = $_POST["Name"];
//$travel = $_POST["Travel"];
//$wisdom = $_POST["Wisdom"];
//$inventiveness = $_POST["Inventiveness"];
//$combatt = $_POST["Combatt"];
//$strategy = $_POST["Strategy"];
//$mindControl = $_POST["Mind Control"];
//$knowledge = $_POST["Knowledge"];
//
//?>
