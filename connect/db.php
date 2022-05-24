<?php
$user = 'u41797';
$pass = '6849699';
$db = new PDO('mysql:host=localhost;dbname=u41797', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>