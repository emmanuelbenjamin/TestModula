<?php



    $serveur = "localhost";
    $dbname = "formdb";
    $user = "root";
    $pass = "";

    $username = $_POST['user'];
    $password = $_POST['pass']
    

        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $result = mysql_query("SELECT * FROM `utilisateurs`")

?>