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
    <body>
        <?php 
        include "template.php";
        ?>
        
        <form id="spørgsmål" action="/SchoolPHPRoot/ProjectQuiz/simpleResult.php" method="POST">
            <h2 id="overskrift">Quiz</h2>
<!--SPØRGSMÅL 1--> 
            <?php echo"<div id='response3'><h3 id='text'>".$qe1."</h3></div>";?> 
            <center><div id="svarmulige"><ul id="text"> 
                <li><input type="radio" name="q1" value="a"/> <label><?php echo $sp1a; ?></label></li>
                <li><input type="radio" name="q1" value="b"/> <label><?php echo $sp1b; ?></label></li>
                <li><input type="radio" name="q1" value="c"/> <label><?php echo $sp1c; ?></label></li>
                <li><input type="radio" name="q1" value="d"/> <label><?php echo $sp1d; ?></label></li>
            </ul></div></center>
<!--SPØRGSMÅL 2-->            
            <?php echo"<div id='response3'><h3 id='text'>".$qe2."</h3></div>";?>
            
            <center><div id="svarmulige"><ul id="text"> 
                <li><input type="radio" name="q2" value="a"/> <label><?php echo $sp2a; ?></label></li>
                <li><input type="radio" name="q2" value="b"/> <label><?php echo $sp2b; ?></label></li>
                <li><input type="radio" name="q2" value="c"/> <label><?php echo $sp2c; ?></label></li>
                <li><input type="radio" name="q2" value="d"/> <label><?php echo $sp2d; ?></label></li>
            </ul></div></center>
<!--SPØRGSMÅL 3-->            
            <?php echo"<div id='response3'><h3 id='text'>".$qe3."</h3></div>";?>
            
            <center><div id="svarmulige"><ul id="text"> 
                <li><input type="radio" name="q3" value="a"/> <label><?php echo $sp3a; ?></label></li>
                <li><input type="radio" name="q3" value="b"/> <label><?php echo $sp3b; ?></label></li>
                <li><input type="radio" name="q3" value="c"/> <label><?php echo $sp3c; ?></label></li>
                <li><input type="radio" name="q3" value="d"/> <label><?php echo $sp3d; ?></label></li>
            </ul></div></center>

<!--SUBMIT-->             
            <center>
                <input class="button" type="submit" value="Check" name="submit">
                <input class="button" type="reset" value="Clear" name="clear">
            </center>
        </form>
    </body>
</html>
