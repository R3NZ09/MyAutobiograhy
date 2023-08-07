<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // include 'Header.php';
//     require 'Header.php';
    // $today=date("y-m-d");
//     var_dump($today);
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css?v=<?php echo time(); ?>">
    <title>About-me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
 
<body>
    <div class="container">
        <div class="box">



<b></b>
<img src="images/renz-2.png">
        <div class="content">
            <h2>Lorence G. Gonzales<br><span>My Social Media</span></h2>
                <ul class="sci">
                    <li><a href="https://www.facebook.com/lorence.gonzales.568" target="_blank" ><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/Lorence84420695" target="_blank" ><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href=https://lggonzales.blogspot.com/ target="_blank"><i class="fa-brands fa-blogger-b"></i></a></li>

                </ul>             
            </h2>
        </div>
    </div>
    
    <body>
    <div id="GROW">
    <div class="glass">
    <nav>
    <img src="images/PLMlogo.png" class="logo">
        <ul id="sidemenu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Introduction.php">Introduction</a></li>       
            <li><a href="about-Me.php">About Me</a></li>
            <li><a href="activity.php">Activity</a></li>
            
        </ul>
    </nav>

        <div class="Glassmorphism">
            <div class="glowing">
                <b></b>
                <span></span>
                <div class="glass">
                    <h2>About me</h2>
                    <p>Hi! Im Lorence G. Gonzales From Baseco Port Area Manila, 
                        Now Im 2nd year College at Pamantasan ng Lungsod Maynila and my course is
                        Bachelor of Science in Information Technology.
                    </p>
                    <a href="https://lggonzales.blogspot.com/" target="_blank">Read more</a>
                    </div>
                </div>
                <div class="glowing">
                    <b></b>
                    <span></span>
                    <div class="glass">
                        <h2>My Hobbies</h2>
                        <p>
                            <li>BASKETBALL</li>
                            <li>PLAYING ONLINE GAMES</li>
                            <li>BILLIARD</li>

                        </p>
                        <h2>Favorite Foods</h2>
                        <p>
                            <li>CHICKEN</li>
                            <li>SPAGHETTE</li>
                            <li>ADOBO</li>

                        </p>

                        <a href="https://lggonzales.blogspot.com/"target="_blank">Read more</a>
                        </div>
                    </div>
            </div>
            </div>

    </body>               
</body>
</html>

<style>
    @import url('https://fonts.googleeapis.com/css?family=poppins:200,300,400,500,600,700,800,900&display=swap');
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
}
body
{
    display: grid;
    justify-content: space-between;
    align-items: start;
    min-height: 100vh;
    background: #071111;
    
}
.container
{
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    bottom: 80px;
    padding: 100px ;
    background-image: url(images/BG.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.container .box
{
    position: relative;
    top: 60px;
    width:320px;
    height: 400px;
    background: #f00;
    margin: 20px 30px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.container .box::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(315deg,#4dff03,#00d0ff);  
}
.container .box::after
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 90%;
    height: 100%;
    background: linear-gradient(315deg,#4dff03,#00d0ff);  
    filter: blur(30px);   
}
.container .box:nth-child(1):before,
.container .box:nth-child(1):after
{
background: linear-gradient(315deg,#03a9f4,#ff058f);
}
.container .box b
{
    position: absolute;
    inset: 6px;
    background:  rgba(0,0,0,0.6);
    z-index: 2;
}
.container .box img
{
    position: absolute;
    z-index: 3;
    scale: 0.4;
    opacity: 0.25;
    transition: 0.5s;
}
.container .box:hover img
{
    scale: 0.4;
    opacity: 0.8;
    transform: translateY(-70px);
}
.container .box .content
{
    position: absolute;
    bottom: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    transition: 0.5s;
    transform: scale(0);
    z-index: 3;
}
.container .box:hover .content
{
    transform: scale(1);
    bottom: 35px;
}
.container .box h2
{
    position: relative;
    color: #fff;
    font-weight: 500;
    line-height: 1em;
    font-size: 1.1em;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    text-align: center;
}
.container .box h2 span
{
    font-weight: 200;
    font-size: 0.90em;
}
.container .box .sci
{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    margin-bottom: 0px;
}
.container .box .sci li
{
list-style: none;
}
.container .box .sci li a
{
position: relative;
color: rgba(255,255,255,00.5);
background: rgba(0,0,0,0.2);
width: 10px;
height: 10px;
display: list-item;
justify-content: center;
align-items: center;
border-radius: 4px;
text-decoration: none;
transition: 0.5s;
}
.container .box .sci li a:hover
{
    color: rgba(255,255,255,1);
}

*
{
    margin: 0;
    padding: 0px;
    box-sizing: border-box;
    font-family: consolas;
}
body
{
    display: flex;
    justify-content: start;
    align-items: start;
    min-height: 90vh;
    background: #1d061a;
}
.Glassmorphism
{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 40px 0;
}
.Glassmorphism .glowing
{
    position: relative;
    width: 320px;
    height: 390px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px 30px;
    transition: 0.5s;
}

.Glassmorphism .glowing::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 100%;
    background: #fff;
    border-radius: 8px;
    transform: skewX(15deg);
    transition: 0.5s;
}
.Glassmorphism .glowing::after
{
    content: '';
    position: absolute;
    top: 0;
    left: 50px;
    width: 50%;
    height: 100%;
    background: #fff;
    border-radius: 8px;
    transform: skewX(15deg);
    transition: 0.5s;
    filter: blur(30px);
    transition: 0.5s;
}
.Glassmorphism .glowing:hover::before,
.Glassmorphism .glowing:hover::after
{
    transform: skewX(0deg);
    left: 20px;
    width: calc(100% - 90px);
}
.Glassmorphism .glowing:nth-child(1)::before,
.Glassmorphism .glowing:nth-child(1)::after
{
    background: linear-gradient(315deg,#ffbc00,#ff0058);
}
.Glassmorphism .glowing:nth-child(2)::before,
.Glassmorphism .glowing:nth-child(2)::after
{
    background: linear-gradient(315deg,#03a9f4,#ff0058);
}
.Glassmorphism .glowing span
{
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 50;
    pointer-events: none;
}
.Glassmorphism .glowing span::before
{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05) ;
}
.Glassmorphism .glowing:hover span::before
{
    top: -50px;
    left: 50px;
    width: 100px;
    height: 100px;
    opacity: 1;

}
.Glassmorphism .glowing span::after
{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    height: 100%;
    border-radius: 8px;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    opacity: 0;
    transition: 0.5s;
    animation: animate 2s ease-in-out infinite;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05) ;
    animation-delay: -1s;
}
.Glassmorphism .glowing:hover span::after
{
    bottom : -50px;
    right: 50px;
    width: 100px;
    height: 100px;
    opacity: 1;

}


@keyframes animate
{
    0%,100%
    {
        transform: translateY(10px);
    }
    50%
    {
        transform: translateY(-10px);
    }
}

.Glassmorphism .glowing .glass
{
    position: relative;
    left: 0;
    padding: 20px 40px;
    background: rgba(255,255,255,0.05);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-radius: 8px ;
    backdrop-filter: blur(10px);    
    z-index: 1;
    transition: 0.5s;
    color: #fff;
}
.Glassmorphism .glowing:hover .glass
{
    left: -25px;
    padding: 60px 40px;
}
.Glassmorphism .glowing .glass h2
{
    font-size: 2em;
    color: #fff;
    margin-bottom: 10px;
}
.Glassmorphism .glowing .glass p
{
    font-size: 1.1em;
    margin-bottom: 10px;
    line-height: 1.4em;
}
.Glassmorphism .glowing .glass a
{
    display: inline-block;
    font-size: 1.1em;
    color: #111;
    background: #fff;
    padding: 10px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 500%;
    margin-top: 5px;
}
.logo{
width: 110px;
position: relative;
right: 400px;
}

</style>