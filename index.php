<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hello</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script>
        var r = document.querySelector(':root');
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
          document.getElementById("overlayspan").style.display = "block";
        }
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
          document.getElementById("overlayspan").style.display = "none";
        }
        function staytxtdec() {
          document.getElementById("staytxtdeco").style.outline = "1px #727272 solid";
        }
        function whitemode() {
          r.style.removeProperty('--bg', '#002227');
          r.style.removeProperty('--color', '#d1d1d1');

          r.style.setProperty('--bg', '#ffffff');
          r.style.setProperty('--color', '#002227');
        }
    </script>
    <script>
        function darkmode() {
          r.style.removeProperty('--bg', '#ffffff');
          r.style.removeProperty('--color', '#002227');

          r.style.setProperty('--bg', '#002227');
          r.style.setProperty('--color', '#d1d1d1');
        }
    </script>
</head>
    <div class="navbar">
        <a href="https://lolstick.de" class="logo" id="staytxtdeco" onclick="staytxtdec()">
            Lolstick.de
        </a>
        <button onclick="whitemode()">Whitemode</button>
        <button onclick="darkmode()">Darkmode</button>
        <a class="material-symbols-outlined menubutton" title="Menu" onclick="openNav()">
            menu
        </a>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="https://lolstick.de/login">Login</a>
        <a href="https://lolstick.de/about">About</a>
        <a href="https://lolstick.de/discord">Discord</a>
        <a href="#">Contact</a>
    </div>
    <span id="overlayspan" class="overlayspan" onclick="closeNav()"> </span>


<body>
    <div class="maintitle">
        <div class="title">
            Hello
        </div>
        <div class="underline"></div>
        <div class="undertitle">
            welcome to lolstick.de!
        </div>
    </div>
    <div class="picture" norepeat><img src="index.png" alt="A normal HTML Index Code"></div>
    <div class="container borderline">
        <h1>Nice to see you!</h1>
        <p>I'm a hobby programmer out of Germany as you can see.</p>
    </div>
    <div class="container">
        <div class="borderline"></div>
        <h1>About</h1>
        <h3>What I am doing?</h3>
        <p>I love it to learn new things and train new skills in HTML, PHP, JS, CSS or SCSS </p>
    </div>
    <div class="footer">
        Impressum
    </div>
</body>
</html>