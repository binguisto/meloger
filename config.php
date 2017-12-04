<?php

global $connexion;

try
{
    $connexion = new PDO("mysql:host=localhost; dbname=meloger", "root", "");
}
catch(Exception $message)
{
    echo ' Erreur de connexion : '.$message->getMessage().'<br />';
    echo ' Erreur N° : '.$message->getCode();
}
