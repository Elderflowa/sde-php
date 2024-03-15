<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<title>LOGIN</title>
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
        
        #button {
            font-weight:bolder;
            font-family: "Varela Round";
        }
    </style>
    
    <body style="background-color: bisque">
        <div id="layout">
            <form action="side2.php" method="POST">
                <h2 id="text">Navn: <input type="text" name="navn" /></h2>
                <h2 id="text">Alder: <input type="number" name="alder" /></h2><br>
                <button id="button" style="width:60px;height:30px;" type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
