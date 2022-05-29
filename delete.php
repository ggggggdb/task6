<?php
$id = $_POST['delete'];
$user = 'u20965';
$pass = '6075045';
$db = new PDO('mysql:host=localhost;dbname=u20965', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
$req = "DELETE FROM all_abilities WHERE user_id='$id'";
$res = $db->prepare($req);
$res->execute();
$req = "DELETE FROM form WHERE user_id='$id'";
$res = $db->prepare($req);
$res->execute();
$req = "DELETE FROM users WHERE user_id='$id'";
$res = $db->prepare($req);
$res->execute();
header('Location:admin.php');
