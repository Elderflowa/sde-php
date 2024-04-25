<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
	<title>Login Success!</title>
        <style>
            .collapsible {
              cursor: pointer;
              padding: 18px;
              width: 100%;
              border: none;
              text-align: left;
              outline: none;
              font-size: 18px;
              font-weight:bolder;
              font-family: "Varela Round";
              background-color: white;
            }

            .active, .collapsible:hover {
              background-color: #f1f1f1;
            }

            .content {
              padding: 0 18px;
              display: none;
              overflow: hidden;
              background-color: #f1f1f1;
            }
        </style>    
    </head>
    <style>
        body {
            background: #d4e1ff;
            font-weight:bolder;
            font-family: "Varela Round";
        }
        
        #myInput {
            background-image: url('search.png'); /* Add a search icon to input */
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            
            width: max(30%, 200px); /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
            margin-left: 20px;
            margin-right: 20px;
            border-radius: 5px;
          }

          #myUL {
            /* Remove default list styling */
            list-style-type: none;
            padding: 0;
            margin: 0;
            margin-left: 20px;
            margin-right: 20px;
          }

          #myUL li a {
            border: 1px solid #ddd; /* Add a border to all links */
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6; /* Grey background color */
            padding: 12px; /* Add some padding */
            text-decoration: none; /* Remove default text underline */
            font-size: 18px; /* Increase the font-size */
            color: black; /* Add a black text color */
            display: block; /* Make it into a block element to fill the whole list */
            border-radius: 5px;
          }

          #myUL li a:hover:not(.header) {
            background-color: #eee;
          }/* Add a hover effect to all links, except for headers */
          
          #header {
              margin-left: 20px;
              margin-right: 20px;
          }
    </style>
    <script>
        function myFunction() {
          // Declare variables
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById('myInput');
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName('li');

          // Loop through all list items, and hide those who don't match the search query
          for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              li[i].style.display = "";
            } else {
              li[i].style.display = "none";
            }
          }
        }
    </script>
    
    <body>
        <h3 id="header">HELPFUL CMD</h3>
        
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for commands..">

        <ul id="myUL" class="outline">
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Ping</span> (example.com, ip-address)</button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "ping" to check if a pc has internet or acccess to other devices on the network.<br><br><span style="font-weight: 700;">Example:</span> ping google.com</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Ip-config</span> (/all)</button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "ipconfig" or "ipconfig /all" to see network adapter details.<br><br><span style="font-weight: 700;">Example:</span> ipconfig /all</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Update Group Policy</span></button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "gpupdate" to update group policy, "/force" can be added as an extra parameter.<br><br><span style="font-weight: 700;">Example:</span> gpupdate /force</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">System Information</span></button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "systeminfo" to view system information.<br><br><span style="font-weight: 700;">Example:</span> systeminfo</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Directory</span> (change, create) </button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "mkdir" to make a new directory, and "cd" to change the current directory in Command Prompt.<br><br><span style="font-weight: 700;">Example:</span> cd [directory]</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Check disk</span></button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "chkdsk" to run a disk check, the parameter "/f" can be used to try to fix errors or problems.<br><br><span style="font-weight: 700;">Example:</span> chkdsk /f</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Task list</span></button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "tasklist" to see running processes and their process ID (PID).<br><br><span style="font-weight: 700;">Example:</span> tasklist</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Task kill</span></button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Use "taskkill" to end a process. PID required, can be forced with "/f". <br><br><span style="font-weight: 700;">Example:</span> taskkill /pid &lt;PID&gt; /f</span></div></a></li>
            <li><a href="#"><button class="collapsible"><span style="color:#0669bb;">Open Windows settings</span> (start)</button> <div  class="content"><span style="font-weight: 300; font-size: 15px;">Open Windows settings with the command "start". <br><br><span style="font-weight: 700;">Example:</span> start ms-settings:</span></div></a></li>
        </ul>
        
        <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
          coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
              content.style.display = "none";
            } else {
              content.style.display = "block";
            }
          });
        }
        </script>
    </body>
</html>
