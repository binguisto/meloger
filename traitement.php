<?php session_start();
require "config.php";
extract($_POST);
$error = "";
if(isset($_GET['deconnexion'])){
    session_destroy();
    header('location: index.php'); 
}
if(isset($_GET['connexion'])){
    $sql = "SELECT * from users where email = '".$email."' and password = '".$password."' ";
    $query = $connexion->query($sql);
    $res = $query->fetch();
    if($res){
        session_start();
        $_SESSION = $res; 
        header('location: user/index.php');        
    }else{
        header('location: user/login.php?error');
}
}
if(isset($_POST['inscription'])){
    $sql = "SELECT email from users where email = ".$email;
    $query = $connexion->query($sql);
    if($query){
        $error = "email";
        header('location: inscription.php?status='.$error);
    }else{
        if($password !== $cpassword){
            $error = "password";
            header('location: inscription.php?status='.$error);
        }else{
            
            if (isset($_FILES['photo']['name'])){
            $target_file = '';
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["photo"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
           
            // Check if file already exists
            if (file_exists($target_file)) {
                $error = "exist";
                $uploadOk = 0;
                header('location: inscription.php?status='.$error);
                exit;
            }
            // Check file size
            if ($_FILES["photo"]["size"] > 2000000) {
                $error = "size";
                $uploadOk = 0;
                header('location: inscription.php?status='.$error);
                exit;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                $error = "format";
                $uploadOk = 0;
                header('location: inscription.php?status='.$error);
                exit;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               header('location: inscription.php?status='.$error);
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
                    $status = "success";
                } else {
                    $error = "unknow";
                    header('location: inscription.php?status='.$error);
                }
            }
        }
        
        $status = "success";
        $sql2 = "INSERT INTO users VALUES('', ".$connexion->quote($nom).",".$connexion->quote($prenoms).",".$connexion->quote($adresse).",".$connexion->quote($telephone).",".$connexion->quote($email).",".$connexion->quote($sexe).",".$connexion->quote($sitMat).",".$connexion->quote($target_file).",".$connexion->quote($password).",".$connexion->quote($cpassword).",'','',".$connexion->quote($typeUser).")";
        $result = $connexion->query($sql2);
        if(!$result){
            header('location: inscription.php?status='.$error);
        }else{
            header('location: inscription.php?status='.$status);
        }
    }
    }
}


?>