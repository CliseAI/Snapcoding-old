<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>SnapCoding</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="snapcodingcss.css">                                    <!-- My css         -->
        <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>       <!-- icon pack      -->
    </head>    
    <body>      
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="prototype.html" style="color: white;">SnapCoding</a>
                </div>
                <button class="transparentBtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Login </button>        
                <div class="menu">
                    <ul class="navbar-menu">   
                        <li class="li-menu"><a href="Prototype.html" class="link-menu" style="opacity: 1;">Home</a></li>
                        <li class="li-menu"><a href="Forum.html" class="link-menu">Forum</a></li>                            
                        <li class="li-menu"><a href="Course.html" class="link-menu">Course</a></li>
                        <li class="li-menu"><a href="About.html" class="link-menu">About</a></li>
                    </ul>
                </div>
            </nav>
        </header>
            <div id="id01" class="modal">
                <form class="modal-content" action="/action_page.php" method="post">
                        <div style='padding:50px'>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>       
                        <button class="loginBtn" type="submit">Login</button>
                    </div>
                    <div class="container" style="background-color:#f1f1f1">
                        <button class="loginBtn" type="button" onclick="document.getElementById('id01').style.display='none'; document.getElementById('id02').style.display='block'">Registration</button>
                        <span class='span'>Forgot <a href="#">password?</a></span>
                    </div>
                </form>
            </div>
            <div id="id02" class="modal">
                <form class="modal-content" action="/action_page.php" method="post">
                        <div style='padding:50px'>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>       
                        <button class="loginBtn" type="submit">Create Account</button>
                    </div>
                </form>
            </div>
            <div class="bgPrototype">                                
                <div class="motto">
                    <div class="search-group"> 
                        <div class="scroll-down">
                            <span class="iconify" data-icon="simple-line-icons:arrow-down" data-inline="false" style="color: white;" data-width="200" data-height="50"></span>                        
                        </div>
                        <p style="color: white; font-family: calibri; margin: 20px; font-size: 35px; font-weight: bold;">Hello, what can we help you find?</p>
                        <div class="input">
                            <input id="search" type="search" placeholder="Search...">
                            <div>
                                <button id="searchbtn" type="submit"> Search </button>
                            </div>
                        </div>                        
                    </div>    
                    <h1 class="motto-word">Snap.Coding<br> Easier way to learn Python</h1>                             
                </div>            
            </div>                 
            <div class="main static">          
                <div class="section get-started">
                    <div class="a">
                        <font style="font-size: 50px; font-weight: bold;">About Us</font>
                    </div>
                </div>
                <div class="section page">
                    <div class="video" >
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/_uQrJ0TkZlc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="video-explanation">
                        <h2>Learn Python with Snapcoding</h2>
                        <br> In solving the difficulties of coding, 
                        <br> websites are the best media to solve it. Using a website, 
                        <br> it makes  easier for everyone to access it. Our group designed a 
                        <br> coding site as simple as possible so that people who already 
                        <br> know coding or never know coding can learn and understand. 
                        <br> It also has a forum that makes it easier for users to ask each other questions. 
                        <br> With this forum, it will allow everyone who has never known code to familiarize 
                        <br> themselves with the encoding environment.
                    </div>
                </div>
                <div class="section get-started">
                    <div class="a">
                        <h1 style="margin-top: 0;">Get Started</h1>
                        <p style="font-size: 20px;">if you have any question or business feel free to Join us !</p><br>
                        <a class="btn" href="mailto: arisasmoko.win10@gmail.com">Get in Touch !</a>
                    </div>
                </div>
                <footer>
                    <div class="section footer">
                        <div style="display: block;">
                            <div style="display: flex; margin-bottom: 130px;">
                                <div class="navigation">
                                    <h3>Navigation</h3>
                                    <ul class="a">
                                        <li><a href="Home.html">Home</a></li>
                                        <li><a href="About.html">Forum</a></li>
                                        <li><a href="Edu.html">Course</a></li>
                                        <li><a href="Resume.html">About</a></li>
                                    </ul>
                                </div>                      
                            </div>
                            <div class="credit">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart text-danger" aria-hidden="true"></i> by Snapcoding
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        <script>
        var modal = document.getElementById('id01');
        var modal2 = document.getElementById('id02');
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";              
            }
            else if (event.target == modal2) {
                modal2.style.display = "none";
            }
        }      
        </script>
    </body>
</html>
