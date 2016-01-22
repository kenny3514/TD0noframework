<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=atp;charset=utf8', 'root', '0000');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>