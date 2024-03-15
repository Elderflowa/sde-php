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
	<title></title>
    </head>
    <style>
        body {
            background: url(https://i.imgur.com/HqwiTvQ.png), #4ea37a;
            background-size:cover;
        }
       
        #response {
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
        <div>
            <<h2 id="response">Preview of php/html/css code</h2>
        </div> 
        <div id="codepreview" style="height:200px;"> 
            <script src="https://gist.github.com/Elderflowa/5f306d71fca129f2e484889d5d2a4594.js"></script>
        </div>
        <?php
        ?>
    </body>
</html>
