<?php
$db = new PDO('mysql:host=db; dbname=Timelord', 'root', "password");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT * FROM forgallifrey');
$query->execute();
$forgallifreyArray = $query->fetchAll();
//var_dump($forgallifreyArray);


foreach ($forgallifreyArray as $item){
   foreach($item as $key => $value){
       echo $key.": ".$value."<br>";
       if ($key==="No. of Adds"){
           echo "</p><p>";
       }
   }
}

?>

<html lang="en-GB">

<head>
    <title>TimeLordCollection</title>
    <link rel="stylesheet" type="text/css" href="timelordz.css">
</head>

<body>
<h1>Time Lord Collectables</h1>

<div>
    <h2>The Doctor</h2>
    <img src="34DD0CEF-7DEB-4FAC-A0D5-F3E1E85C7082.jpg" class="images" alt="The Doctor (David Tennant) stares into the camera in a blue suit and against an orange background.">
   <p><button>Add The Doctor</button></p>


    <h2>The Master</h2>
    <img class="images" src="https___winteriscoming.net_files_image-exchange_2018_08_ie_35830.jpg" alt="The Master (Dhawan) stands in purple victorian dress against a dark background holding some sort of technical device menacingly.">
    <p><button>Add The Master</button></p>

    <h2>Rassilon</h2>
    <img class="images" src="rassilon_the_resurrected_by_timelordghost-da711b2.jpg" alt="Rassilon stands proud against an orange sky background in Red and gold robes holding an imperial staff and wearing a gold collar piece.">
    <p><button>Add Rassilon</button></p>

    <h2>Omega</h2>
    <img class="images" src="Doctor-Who-Omega-appeared-on-Gallifrey-alongside-Tecteun-and-Rassilon-in-the-Matrix-2697746.jpg" alt="A man in dark green robes leans toward the camera against a red background and wearing a large bronze helm.">
    <p><button>Add Omega</button></p>

    <h2>The Meddling Monk</h2>
    <img class="images" src="2fcax1uo0wv1000.jpg" alt="The Meddling Monk stands on a clifftop with the sun rising behind him and metal
clockwork hanging suspended in midair behind him.">
    <p><button>Add The Meddling Monk</button></p>

    <h2>Susan</h2>
    <img class="images" src="images.jpg" alt="A black and white image, Susan looks toward the camera in a leather cap and white collar.">
    <p><button>Add Susan</button></p>

    <h2>River Song</h2>
    <img class="images" src="200px-River_Song_Doctor_Who.png" alt="River Song stands against a multicoloured background in a leather jacket.">
    <p><button>Add River Song</button></p>

    <h2>The Rani</h2>
    <img class="images" src="220px-The_Rani-Kate_O'Mara_(1987).jpg" alt="The Rani stands looking imperious in a red and gold tunic with broad sleeves and a technical device on her arm.">
    <p><button>Add The Rani</button></p>
</div>
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

