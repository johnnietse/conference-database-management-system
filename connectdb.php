<?php
try {
    $connection = new PDO('mysql:host=localhost;port=3308;dbname=conferenceDB', "root", "");
} catch (PDOException $e) {
    print "Connection failed: " . $e->getMessage(). "<br/>";
    die();
}
?>