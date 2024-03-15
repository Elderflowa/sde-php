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
	<title>GUESSING GAME</title>
    </head>
    <style>
        body {
            background: url(https://i.imgur.com/8vj3Plv.png), bisque;
            background-size:cover;
        }
        
        #guesscounter {
            position: fixed;
            top: 0;
            left: 20px;
            z-index: 999;
            text-align: center;
        }
        
        #kill {
            font-weight:bolder;
            font-family: "Varela Round";
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
            text-align: center;
        }
        
        #secret {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 999;
            text-align: center;
        }
        
        #brugte {
            position: fixed;
            top:40vh;
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
        <div id="guesscounter">
            
        </div>
        <div id="layout">
            <form action="" method="POST">
                <h2 id="text">Tal: <input style="width:80px;height:25px;text-align:center;"type="number" name="gæt" /></h2>
                <input id="button" style="width:auto;height:30px;" type="submit" value="Gæt" />
            </form>
            <form action="" method="POST">
                <input id="kill" style="width:auto;height:30px;" type="submit" value="Genstart" name="kill"/>
            </form>
        </div>
        <?php
        
#FUNKTION DER NEMT KAN KALDES MED SPILLET I
        function guessingGame() {
            session_start();

#KNAP DER GENSTARTER SESSIONEN            
            if (isset($_POST["kill"]))
            {session_destroy();}
//$tal = 20;
                #$brugtetal = str([]);
#TJEKKER OM GÆT ER INDSAT
            if (isset($_POST["gæt"]))
            {
                $brugerGæt = $_POST["gæt"];
                #echo "<div id='brugte'><h3 id='text'>"."Du har gættet på: ".$brugtetal."</h3></div>";

#SÆTTER SESSION TIL 1 eller ++ OG GIVER RANDOM TAL
                if (isset($_SESSION["antal"]))
                    {$_SESSION["antal"]++;}
                else {
                    $_SESSION["antal"] = 1;
                    $_SESSION["tal"]= rand(1,100);
                }
#SÆTTER TAL TIL DET GENEREDE TAL FOR SESSIONEN                
                $tal = $_SESSION["tal"];
                
                #VISER TALLET PÅ SKÆRMEN
                #echo "<div id='secret'><h3 id='text'>"."Tallet er: ".$tal."</h3></div>";
                
                #DEN SIGER SESSION ID ISTEDET
                #echo "<div id='guesscounter'><h3 id='text'>"."Session ID: ".$_SESSION["antal"]."</h3></div>";
                echo "<div id='guesscounter'><h3 id='text'>"."Antal gæt brugt: ".$_SESSION["antal"]."</h3></div>";
                
                if ($_SESSION["antal"]==10){
                    echo "<div id='response'><h3 id='text'>"."Du har ikke flere forsøg.."."</h3></div>";
                    echo"<div id='response2'><h3 id='text'>"."svaret var ".$tal."</h3></div>";
                    session_destroy();
                }
                
#GÆTTE PROGRAMMET            
                else {    
                    if ($brugerGæt == $tal)
                        {echo"<div id='response'><h3 id='text'>"."rigtigt - svaret var ".$tal."</h3></div>";
                        echo"<div id='response2'><h3 id='text'>"."lav et nyt gæt for at starte et nyt spil"."</h3></div>";
                        session_destroy();
                        }

                    elseif ($brugerGæt < 0 or $brugerGæt >100)
                        {echo"<div id='response'><h3 id='text'>"."uden for den angivne interval på 1-100"."</h3></div>";}

                    elseif (abs($tal-$brugerGæt)>=50)
                        {echo"<div id='response'><h3 id='text'>"."meget langt forbi"."</h3></div>";}

                    elseif (abs($tal-$brugerGæt)>= 19 and abs($tal-$brugerGæt)< 50  )
                        {echo"<div id='response'><h3 id='text'>"."du er ikke helt ved siden af"."</h3></div>";}

                    else
                        {echo"<div id='response'><h3 id='text'>"."tampen brænder"."</h3></div>";}
            }}
#HVIS SESSION IKKE ER STARTET            
            else
            {echo "<div id='start'><h3 id='text'>"."GÆT ET TAL"."</h3></div>";
            echo"<div id='response2'><h3 id='text'>"."mellem 1-100, du har 10 forsøg "."</h3></div>";
            }
            
#LOOP MED RESTART
        }
        guessingGame();
        ?>
        
    </body>
</html>
