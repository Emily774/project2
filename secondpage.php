$db = new PDO('mysql:host=db; dbname=Timelord', 'root', "password");
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$update = $db->prepare("UPDATE `forgallifrey` SET `No. of Adds`= 1 WHERE `id`= 9;