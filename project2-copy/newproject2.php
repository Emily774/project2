<?php
$db = new PDO('mysql:host=db; dbname=test', "Flimsy", "Flimsy");
$query = $db->prepare("query;");
$query->execute();
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
    <button>Add The Doctor</button>
</div>

<div>
<h2>The Master</h2>
<img class="images" src="https___winteriscoming.net_files_image-exchange_2018_08_ie_35830.jpg" alt="The Master (Dhawan) stands in purple victorian dress against a dark background holding some sort of technical device menacingly.">
<button>Add The Master</button>
</div>


<div>
    <h2>Rassilon</h2>
    <img class="images" src="rassilon_the_resurrected_by_timelordghost-da711b2.jpg" alt="Rassilon stands proud against an orange sky background in Red and gold robes holding an imperial staff and wearing a gold collar piece.">
    <button>Add Rassilon</button>
</div>

<div>
    <h2>Omega</h2>
    <img class="images" src="Doctor-Who-Omega-appeared-on-Gallifrey-alongside-Tecteun-and-Rassilon-in-the-Matrix-2697746.jpg" alt="A man in dark green robes leans toward the camera against a red background and wearing a large bronze helm.">
    <button>Add Omega</button>
</div>

<div>
    <h2>The Meddling Monk</h2>
    <img class="images" src="2fcax1uo0wv1000.jpg" alt="The Meddling Monk stands on a clifftop with the sun rising behind him and metal
clockwork hanging suspended in midair behind him.">
    <button>Add The Meddling Monk</button>
</div>

<div>
    <h2>Susan</h2>
    <img class="images"  src="images.jpg" alt="A black and white image, Susan looks toward the camera in a leather cap and white collar.">
    <button>Add Susan</button>
</div>

<div>
    <h2>River Song</h2>
    <img class="images" src="200px-River_Song_Doctor_Who.png" alt="River Song stands against a multicoloured background in a leather jacket.">
    <button>Add River Song</button>
</div>

<div>
    <h2>The Rani</h2>
    <img class="images" src="220px-The_Rani-Kate_O'Mara_(1987).jpg" alt="The Rani stands looking imperious in a red and gold tunic with broad sleeves and a technical device on her arm.">
    <button>Add The Rani</button>
</div>

</body>
</html>

