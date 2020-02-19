<?php
    require_once("user.php");
    function get_connection (){
        $servername = "localhost:3307";
        $username = "root";
        $password = "root";
        $dbname = "oop";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: ".$conn->connect_error);
            return false;
        } 
        return $conn;
    
    }

    function savePerson($user){
        $conn = get_connection();
        $name = $user->GetName();
        $surname = $user->GetSurname();
        $dni = $user->GetDni();
        $email = $user->GetEmail();
        $country = $user->GetCountry();
        $sql = "INSERT INTO user (name, surname, dni, email, country) VALUES 
            (
                '".$name."',
                '".$surname."',
                '".$dni."',
                '".$email."',
                '".$country."'
            )";
        /*mission complete*/
        $result = $conn->query($sql);
        $conn->close();
    }


?>