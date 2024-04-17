<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<title>Checker..</title>
    </head>
    <body>
        <?php
        echo "check login!";
        session_start();
        $host="localhost";
        $username="root";
        $password="";
        $db_name="nilasdatabase";
        $tbl_name="login";
            
        $conn = mysqli_connect($host, $username, $password, $db_name);
        
        if (!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }
        
        $my_username=$_POST["username"];
        $my_password=$_POST["password"];
        
        $_SESSION["username"] = $_POST["username"];
        
        $sql="SELECT * FROM $tbl_name WHERE username='$my_username' and password='$my_password'";
        $resultat = mysqli_query($conn, $sql);
        
        $count=mysqli_num_rows($resultat);
        
        if ($count == 1){
            $_SESSION['login'] = 1;
            header("location:correct_login.php");
        }
        
        else {
            echo "Forkert Brugernavn eller password";
            header("location:login.php");
        }
        
        ?>
    </body>
</html>
