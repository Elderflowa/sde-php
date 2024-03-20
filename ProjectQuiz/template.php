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
	<title>Regler</title>
    </head>
    <style>
        body {
            background: url(https://i.imgur.com/HqwiTvQ.png), #4ea37a;
            background-size:cover;
        }
        
        #responseresultat {
            padding-top: 10vh;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 2vh;
            width: 500px;
            color: white;
        }
        
        #response3 {
            padding-top: 5px;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 2.2vh;
            width: 400px;
            color: white;
        }
        
        #overskrift {
            font-weight:bolder;
            font-family: "Varela Round";
            margin-top:8vh;
            text-align: center;
            font-size: 5vh;
            color: white;
        }
        
        #layout {
            display: flex;
            justify-content: center;
            margin-top: 50vh;
        }
        
        #spørgsmål {
            left: 0;
            right: 0;
            font-size: 2vh;
        }
        
        #text {
            font-weight:bolder;
            font-family: "Varela Round";
        }
        
        ul {
            list-style-type: none;
        }
        
        #svarmulige {
            width: 350px;
            text-align: left;
            padding-left: 50px
        }
        
        .button {
            border-radius: 12px;
            background-color: white;
            border: 3px solid white;
            padding: 10px;
            font-family: "Varela Round";
            font-weight: bolder;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
        }
        
        #tilbageknap {
            padding-top: 20px;
        }
        
    </style>
    
    <!--    <style>
        body {
            background: url(https://i.imgur.com/HqwiTvQ.png), #4ea37a;
            background-size:cover;
        }
       
        #overskrift {
            font-weight:bolder;
            font-family: "Varela Round";
            top:8vh;
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 4vh;
            color: white;
        }
        #spørgsmål {
            top:28vh;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                text-align: center;
                font-size: 4vh;
        }
        #response {
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
    </style>-->
    
    <body>
        <?php
        $qe1 = "Hvad er englands hovedstad?";
        
        $sp1a = "London";
        $sp1b = "Paris";
        $sp1c = "København";
        $sp1d = "Stockholm";
        
        $sp1r = "a";
        
        $qe2 = "Hvad hedder vores galakse?";
        
        $sp2a = "Motorvejen";
        $sp2b = "Mælkevejen";
        $sp2c = "Cykelstien";
        $sp2d = "Bilvejen";
        
        $sp2r = "b";
                
        $qe3 = "Hvilket kode-sprog bruges til at style en HTML-hjemmeside?";
        
        $sp3a = "CSS";
        $sp3b = "Python";
        $sp3c = "PHP";
        $sp3d = "Scratch";
        
        $sp3r = "a";
        
        $mængdeSpørgsmål = 3;
        ?>
    </body>
</html>
