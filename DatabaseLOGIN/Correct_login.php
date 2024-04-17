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
	<title>Login Success!</title>
    </head>
    <style>
        body {
            background: url(https://i.imgur.com/g7PRMQB.png), #692a65;
        }
        
        #reload {
            font-weight:bolder;
            font-family: "Varela Round";
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            text-align: center;
        }
        
        #layout {
            display: flex;
            justify-content: center;
            margin-top: 40vh;
            text-align: center;
        }
        
        #text, #passwordbox,#emailbox {
            font-weight:bolder;
            font-family: "Varela Round";
            text-align: center;
            color: white;
        }
        
        #passwordbox,#emailbox {
            margin-top: 5px;
        }
        
        label {
            font-weight:bolder;
            font-family: "Varela Round";
            display: flex;
            text-align: left;
            font-size:2vh;
            bottom:0px;
            color: #d99cd5;
        } 
        
        #labelpassword {
            padding-top:30px;
            padding-bottom: 0;
            bottom: 0;
        }
        
        #headline {
            top:20vh;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 5vh;
        }
        #button {
            font-weight:bolder;
            font-family: "Varela Round";
        }
    </style>
    <body>
        <?php
            echo "correct login!";
            session_start();
        
            if (!isset($_SESSION["login"]))
            {
            header("location:login.php");
            }
        ?>
        <div id="layout">
            <?php echo "<div id='headline'><h3 id='text'>"."Velkommen ".$_SESSION["username"]."!"."</h3></div>"; ?>
            <form action="logout.php" method="POST">
                <input id="button" style="width:auto;height:30px;" type='submit' name='logout' value="Log ud">
            </form>
        </div>
    </body>
</html>
