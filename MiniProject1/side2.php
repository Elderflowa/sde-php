<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<title>SUCCESS</title>
    </head>
    <style>
        #layout {
            display: flex;
            justify-content: center;
            margin-top: 30vh;
            text-align: center;
        }
        
        #text {
            font-weight:bolder;
            font-family: "Varela Round";
        }
    </style>
    <body style="background-color: bisque">
        <?php
        $navnForm = $_POST["navn"];
        $fremtidAlder = $_POST["alder"]+5;
        $antalNavn = strlen($_POST["navn"]);
        $navnBagfra = strrev($navnForm);
        $stavetUd = strtoupper(wordwrap($navnBagfra, 1, "-", true));
        
        echo "<div id='layout'><h3 id='text'>"."Velkommen ".$navnForm.".<br>"."Der er ".$antalNavn." bogstaver i dit navn og dit navn stavet bagfra er ".$navnBagfra." eller ".$stavetUd."<br><br>"."Om 5 år er du ".$fremtidAlder." år gammel."."</h3></div>";
        ?>
    </body>
</html>
