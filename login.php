<?php

session_start();

if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db = new PDO('mysql:host=localhost;dbname=connexion', 'root', 'toor');

    $sql = "SELECT * FROM users where email = '$email' ";
    $result = $db->prepare($sql);
    $result->execute();

    if($result->rowCount() > 0)
    {
            $data = $result->fetchAll();
            if (password_verify($pass, $data[0]["password"]))
            {
                echo "Connexion effectuée";
                $_SESSION['email'] = $email;
                
            }
    }
    else
    {
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$pass')";
        $req = $db->prepare($sql);
        $req->execute();
        echo "Enregistrement effectué";
    }
}

?>