<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<title>Bestil blomster!</title>
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
            padding-top: 20vh;
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
        
        #headlinebox {
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-weight:bolder;
            font-family: "Varela Round";
            text-align: center;
            color: white;
        }
        
        #headline {
            padding-top:0px;
            margin-top:0px;
            margin-bottom:0px;
            font-size: max(7vh, 30px);
        }
        
        #headline2 {
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            margin-top:0px;
            text-align: center;
            font-size: max(3vh, 10px);
        }
        
        #formbox {
            margin-top: min(150px, 20vh);
        }
        
        #button {
            font-weight:bolder;
            font-family: "Varela Round";
        }
        
        #counter {
            font-weight:bolder;
            font-family: "Varela Round";
            position: fixed;
            top: 5px;
            left: 20px;
            z-index: 999;
            text-align: center;
        }
        
        
    </style>
    <body>
        <div id="layout">
            <?php 
            session_start();
            if (isset($_SESSION["antal"]))
            {$_SESSION["antal"]++;}

            else
                {$_SESSION["antal"] = 1;}

            if (($_SESSION["antal"]) >= 5){
                session_destroy();
                header("location:https://www.google.com/");
            }
            
            //echo "<div id='counter'><h3 id='text'>".$_SESSION["antal"]."</h3></div>";
            echo "<div id='headlinebox'><h3 id='headline'>"."FLORA<br>"."<h3 id='headline2'> Kundeportal</h3>"."</h3></div>"; 
            ?>
            
            <div id="formbox"><form action="checklogin.php" method="POST">
                <?php $_SESSION["antal"] = $_SESSION["antal"] ?>
                <label id="labelemail" for="emailbox">Brugernavn</label>
                <h2 id="emailbox"style="font-size: 2.2vh;"><input style="width:250px;height:25px;text-align:left;padding-left:5px;"type="text" name="username" placeholder="Brugernavn" /></h2>
                <label id="labelpassword" for="passwordbox">Password</label>
                <h2 id="passwordbox"style="font-size: 2.2vh;"><input style="width:250px;height:25px;text-align:left;padding-left:5px;"type="password" name="password" placeholder="Kodeord" /></h2>
                <input id="button" style="width:auto;height:30px;" type="submit" value="Check" />
            </form>
<!-- KNAP DER RELOADER -->            
            <form action="Login.php" method="POST">
                <input id="reload" style="width:auto;height:30px;" type="submit" value="Reload" name="reload"/>
            </form></div>
        </div>
    </body>
</html>
