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
	<title>EMAIL CHECKER</title>
    </head>
    <style>
        body {
            background: url(https://i.imgur.com/5wAVTi1.png), #79c1db;
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
        
        #response {
            top:28vh;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 4vh;
        }
        
        #response2 {
            top:40vh;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 1.5vh;
        }
        
        #layout {
            display: flex;
            justify-content: center;
            margin-top: 50vh;
            text-align: center;
        }
        
        #text {
            font-weight:bolder;
            font-family: "Varela Round";
            text-align: center;
        }
        
        #start {
            top:28vh;
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
        <div id="layout">
            <form action="" method="POST">
                <h2 id="text"style="font-size: 2.2vh;">Email: <input style="width:200px;height:25px;text-align:left;padding-left:5px;"type="text" name="email" placeholder="skriv din email her" /></h2>
                <input id="button" style="width:auto;height:30px;" type="submit" value="Check" />
            </form>
<!-- KNAP DER RELOADER -->            
            <form action="emailCheck.php" method="POST">
                <input id="reload" style="width:auto;height:30px;" type="submit" value="Reload" name="reload"/>
            </form>
        </div>
        <?php
            
#FUNKTION DER NEMT KAN KALDES MED CHECKEREN
        function emailChecker() {
            echo "<div id='start'><h3 id='text'>"."EMAIL CHECKER"."</h3></div>";

#TJEKKER OM EMAIL ER INDSAT
            if (isset($_POST["email"])){
                $brugerEmail = $_POST["email"];
                $emailLength = strlen($brugerEmail);
                $emailEnding = substr($brugerEmail, -3);
                $numberSnabelA = substr_count($brugerEmail, "@");
                
#EMAIL CHECK PROGRAMMET            
                if ($emailLength > 7 and $emailLength < 30){
                    if ($numberSnabelA == 1){
                        if ($emailEnding == ".dk"){
                            $response2 = "<div id='response2'><h3 id='text'>"."Din email er en valid dansk email"."</h3></div>";
                            echo $response2;
                        }
                        else{
                            $response2 = "<div id='response2'><h3 id='text'>"."Din email skal slutte med '.dk' for at være dansk"."</h3></div>";
                            echo $response2;
                        }
                    }
                    elseif($numberSnabelA > 1){
                        $response2 = "<div id='response2'><h3 id='text'>"."Din email har for mange '@'"."</h3></div>";
                        echo $response2;
                    }
                    else{
                        $response2 = "<div id='response2'><h3 id='text'>"."Din email skal indeholde '@'"."</h3></div>";
                        echo $response2;
                    }
                }
                elseif ($emailLength <= 7) {
                    $response2 = "<div id='response2'><h3 id='text'>"."Din email skal mindst have 8 tegn"."</h3></div>";
                    echo $response2;
                }
                else {
                    $response2 = "<div id='response2'><h3 id='text'>"."Din email skal maksimalt have 30 tegn"."</h3></div>";
                    echo $response2;
                }
            }   
#VISER VELKOMST BESKED HVIS MAIL IKKE ER SKREVET              
            else {
                $response2 = "<div id='response2'><h3 id='text'>"."check om du har en valid dansk email "."</h3></div>";
                echo $response2;
            }
        }        
#LOOP MED RESTART
        emailChecker();
        ?>
    </body>
</html>
