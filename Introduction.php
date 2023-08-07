<!DOCTYPE html>
<?php
    // include 'Header.php';
//     require 'Header.php';
    // $today=date("y-m-d");
//     var_dump($today);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/0ba047ed35.js" crossorigin="anonymous"></script>
    
</head>
<body>

<!----------- about me --------->   
<div id="about">
    <div class="container">

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
   



    <div class="row">
    <div class="about-col-1">
        <img src="images/lorence.jpg    ">
    </div>

    
    <div class="about-col-2">
        <h1 class="sub-title">My Introduction</h1>
        <p> Hi! My name is Lorence G. Gonzales I am 2nd year college, student at College of Engineering Technology at 
            Pamantasan ng Lungsod Maynila. We are five siblings. I am the youngest, 
            I am happy that my family is well. My mom and dad were both strict, but 
            I understood because I grew up a vicious and kind person. 
            Maybe that's their way of saying I can't get away. My two siblings are graduates, 
            and my two older brothers are currently studying computer engineering at TUP. I just want 
            them to be proud because when I have a problem, they don't let me go, so thank you for them.
            Now Im college I make sure that I will do my best to learn a lot and discover some lesson or things
            that can I use in my future work and life.
        </p>
            
            <div class="tab-titles">
                <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                <p class="tab-links"onclick="opentab('Experience')">Experience</p>
                <p class="tab-links"onclick="opentab('Education')">Education</p>
            </div>
            <div class="tab-contents active-tab" id="skills">
                <ul>
                    <li><span>HTML & PHP</span><br>Designing Web/App interfaces and Build Mysql Database</li>     
                    <li><span>JAVA IDE</span><br>Designing Desktop System</li>     
                    <li><span>C++</span><br>Learn some Basic algorithm, Flowchart and simple Problem</li>
                    <li><span>JavaScript</span><br>still in progress to learn</li>          
                </ul>
            </div>
            <div class="tab-contents" id="Experience">
                <ul>
                    <li><span>2022 - 2023</span><br>Studying Web Design at PLM Universities</li>     
                    <li><span>2020 - 2021</span><br>1st Try HTML/CSS at PCCAHS.</li>     
                    <li><span>2017 -2019</span><br>Start Design Website at Codeschool.</li>     
                    <li><span>2016 - 2017</span><br>Work Immersion by Assemble and Dissasemble Computer System Unit</li>     
                </ul>
            </div>
            <div class="tab-contents"id="Education">
                <ul>
                    <li><span>2016</span><br>Learning HTML/CSS code at PCCAHS & PLM</li>     
                    <li><span>2019</span><br>Discover a parts of Computer at PCCASHS.</li>     
                    <li><span>2022</span><br>Learning algorithm and Programing language at PLM.</li>
                    <li><span>2023</span><br>Learning Web Design using JAVA and HTML & PHP</li>          
                </ul>
    </div>
    </div>    
    </div>
    </div>
   
<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
        tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
 
</script>

<script>

    var sidemenu = document.getElementById("sidemenu")

    function openmenu(){
        sidemenu.style.right = "0";   
    }
    function closemenu(){
        sidemenu.style.right = "-200px";   
    }
</script>
<Style>
    #about{
    padding: 0px;
    background-color:#ababab;
    background-image: url(images/BG.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.about-col-1{
    flex-basis: 35%;
}
.about-col-1 img{
    width: 100%;
    border-radius: 15px;
}
.about-col-2{
    flex-basis: 60%;
    text-align: justify;
    font-size:small;

}
.tab-titles{
    display: flex;
    margin: 20px 0 40px;
}

.tab-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
}

.tab-links::after{
    content: '';
    width: 0;
    height: 3px;
    background:#ff004f;
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.5s;    
}

.tab-links.active-link::after{
    width:  50%;
} 

.tab-contents ul li{
    list-style: none;
    margin: 10px 0; 
}
.tab-contents ul li span{
    color: #b54769;
    font-size: 14px;
    font-family: 'poppins', sans-serif;
}
.tab-contents{
    display: none;
}
.tab-contents.active-tab{
    display: block;
}

/*--- for nav bar */

#GROW{
width: 100%;
height: 100vh;
}

#glass{
width: 90%;
height: 100vh;
}
.container .GROW{ 
padding: 10px 10%;
}
.logo{
width: 110px;
position: relative;
right: 120px;
}
.nav {
display: flex;
align-items: center;
justify-content: space-between;
flex-wrap: wrap;

}

nav ul li{
display: inline-block;
list-style: none;
margin: 10px 20px;
}

nav ul li a{
color: #fff;
text-decoration: none;
font-size: 18px;
position: relative;
}
nav ul li a::after{
content: '';
width: 0%;
height: 3px;
background: #ff004f;
position: absolute;
left: 0;
bottom: -6px;
transition: 0.5s;
}
ul li a:hover::after{
width: 100%;
}
</style>

</body>
</html>