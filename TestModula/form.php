<?php
    $serveur = "localhost";
    $dbname = "formdb";
    $user = "root";
    $pass = "";
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO infos(nom, prenom, email, message)
            VALUES(:nom, :prenom, :email, :message)");
        $sth->bindParam(':nom',$nom);
        $sth->bindParam(':prenom',$prenom);
        $sth->bindParam(':email',$email);
        $sth->bindParam(':message',$message);
        $sth->execute();
        
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:Contactez-nous.html");
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>