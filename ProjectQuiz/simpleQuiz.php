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
	<title>QUIZ</title>
    </head>
    <style>
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
        
        #codepreview {
            padding-top: 15vh;
            max-width: 780px;
            min-width: 200px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
        
        .gist {
            overflow:auto;
        }

        .gist .blob-wrapper.data {
           max-height:600px;
           overflow:auto;
        }
    </style>
    <body>
        <?php 
        include "template.php";
        ?>
        
        <form action="/SchoolPHPRoot/ProjectQuiz/simpleResult.php" method="POST">
            <h2 id="overskrift">Programmerings-quiz</h2>
            <?php echo $sp1; ?> 
            <ol id="spørgsmål"> 
                <li><input type="radio" name="q1" value="a"/> <label><?php echo $sp1a; ?></label></li>
                <li><input type="radio" name="q1" value="b"/> <label><?php echo $sp1b; ?></label></li>
                <li><input type="radio" name="q1" value="c"/> <label><?php echo $sp1c; ?></label></li>
                <li><input type="radio" name="q1" value="d"/> <label><?php echo $sp1d; ?></label></li>
            </ol>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>
