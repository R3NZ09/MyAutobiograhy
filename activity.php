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
    <title>Activity</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css?v=<?php echo time(); ?>">
    <script src="https://kit.fontawesome.com/0ba047ed35.js" crossorigin="anonymous"></script>
    
</head>
<body>
    

    <nav>
    <img src="images/PLMlogo.png" class="logo">
        <ul id="sidemenu">
            <li><a href="index.php">Home</a></li>
            <li><a href="Introduction.php">Introduction</a></li>       
            <li><a href="about-Me.php">About Me</a></li>
            <li><a href="activity.php">Activity</a></li>
        </ul>
    </nav>
    
    <div class="container">
        <div class="calculator dark">
            <div class="theme-toggler active">
                <i class="toggler-icon"></i>
            </div>
            <div class="display-screen">
                <div id="display"></div>
            </div>
            <div class="buttons">
                <table>
                    <tr>
                        <td><button class="btn-operator" id="clear">C</button></td>
                        <td><button class="btn-operator" id="/">&divide;</button></td>
                        <td><button class="btn-operator" id="*">&times;</button></td>
                        <td><button class="btn-operator" id="backspace"><</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-number" id="7">7</button></td>
                        <td><button class="btn-number" id="8">8</button></td>
                        <td><button class="btn-number" id="9">9</button></td>
                        <td><button class="btn-operator" id="-">-</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-number" id="4">4</button></td>
                        <td><button class="btn-number" id="5">5</button></td>
                        <td><button class="btn-number" id="6">6</button></td>
                        <td><button class="btn-operator" id="+">+</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-number" id="1">1</button></td>
                        <td><button class="btn-number" id="2">2</button></td>
                        <td><button class="btn-number" id="3">3</button></td>
                        <td rowspan="2"><button class="btn-equal" id="equal">=</button></td>
                    </tr>
                    <tr>
                        <td><button class="btn-operator" id="(">(</button></td>
                        <td><button class="btn-number" id="0">0</button></td>
                        <td><button class="btn-operator" id=")">)</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>

    <script>
        const display = document.querySelector("#display");
const buttons = document.querySelectorAll("button");

buttons.forEach((item) => {
  item.onclick = () => {
    if (item.id == "clear") {
      display.innerText = "";
    } else if (item.id == "backspace") {
      let string = display.innerText.toString();
      display.innerText = string.substr(0, string.length - 1);
    } else if (display.innerText != "" && item.id == "equal") {
      display.innerText = eval(display.innerText);
    } else if (display.innerText == "" && item.id == "equal") {
      display.innerText = "Empty!";
      setTimeout(() => (display.innerText = ""), 2000);
    } else {
      display.innerText += item.id;
    }
  };
});

const themeToggleBtn = document.querySelector(".theme-toggler");
const calculator = document.querySelector(".calculator");
const toggleIcon = document.querySelector(".toggler-icon");
let isDark = true;
themeToggleBtn.onclick = () => {
  calculator.classList.toggle("dark");
  themeToggleBtn.classList.toggle("active");
  isDark = !isDark;
};
    </script>

    <style>
    * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    outline: 0;
    transition: all 0.5s ease;
}

body {
    font-family: sans-serif;
}

a {
    text-decoration: none;
    color: #fff;
}

body {
    background-image: url(images/BG.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;

}

.container {
    height: 90vh;
    width: 90vw;
    display: grid;
    place-items: center;
    
}

.calculator {
    position: relative;
    height: auto;
    width: auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 30px #000;
    bottom: 40px;
    right: 120px;
}

.theme-toggler {
    position: absolute;
    top: 30px;
    right: 30px;
    color: #fff;
    cursor: pointer;
    z-index: 1;
}

.theme-toggler.active {
    color: #333;
}

.theme-toggler.active::before {
    background-color: #fff;
}

.theme-toggler::before {
    content: '';
    height: 30px;
    width: 30px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 30%;
    background-color: #333;
    z-index: -1;
}

#display {
    margin: 0 10px;
    height: 150px;
    width: auto;
    max-width: 270px;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
    font-size: 30px;
    margin-bottom: 10px;
    overflow-x: scroll;
  }

#display::-webkit-scrollbar {
    display: block;
    height: 5px;
}

button {
    height: 60px;
    width: 60px;
    border: 0;
    border-radius: 10px;
    margin: 5px;
    font-size: 20px;
    cursor: pointer;
    transition: all 200ms ease;
}

button:hover {
    transform: scale(1.1);
}

button#equal {
    height: 130px;
}

/* light theme */

.calculator {
    background-color: #fff;
}

.calculator #display {
    color: #0a1e23;
}

.calculator button#clear {
    background-color: #ffd5d8;
    color: #fc4552;
}

.calculator button.btn-number {
    background-color: #c3eaff;
    color: #000000;
}

.calculator button.btn-operator {
    background-color: #ffd0fb;
    color: #f967f3;
  }
  
  .calculator button.btn-equal {
    background-color: #adf9e7;
    color: #000;
  }

  /* dark theme */

  .calculator.dark {
    background-color: #071115;
  }

  .calculator.dark #display {
    color: #f8fafb;
  }

  .calculator.dark button#clear {
    background-color: #2d191e;
    color: #bd3740;
  }

  .calculator.dark button.btn-number {
    background-color: #1b2f38;
    color: #f8fafb;
  }

  .calculator.dark button.btn-operator {
    background-color: #2e1f39;
    color: #aa00a4;
  }
  
  .calculator.dark button.btn-equal {
    background-color: #223323;
    color: #ffffff;
  }

  /*--- for nav bar */

#GROW{
width: 100%;
height: 100vh;
}

#glass{
width: 100%;
height: 100vh;
}
.container .GROW{ 
padding: 10px 10%;
}
.logo{
width: 110px;
position: relative;
left: 50px;
top: 20px;

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
margin: 5px 20px;

}

nav ul li a{
color: #fff;
text-decoration: none;
font-size: 18px;
position: relative;
right:100px;
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

