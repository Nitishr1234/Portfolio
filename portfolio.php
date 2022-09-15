<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
<body >
    <div class="container" id="#Home" >

    <div class="logo">
    <h1>N<span>itish.</span></h1>
    </div>
    <div class="nav" >
        <ul>
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Services">Services</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li><a href="#Contact">Contact Us</a></li>
        </ul>
    </div>
    <div class="main-box">
        <h4>Hello</h4>
        <h2>I'M <br> <span class="auto-run"></span></h2>
        <h5>Full-Stack Developer</h5>
        <a href="#" class="btn">Hire Me</a>
    </div>
    </div>
    <div class="container2" id="About">
        <div class="box1">
            <img src="img/222.jpg">
        </div>
        <div class="box1">
            <h1>About Me</h1>
            <h2>Hii,I am Here To Help You To Make a Good Project.</h2>
            <h3>Lorem Ipsum Is Simply Dummy Text Of The Printing And <br>Typesetting Industry. Lorem Ipsum Has Been The Industry's <br>Standard Dummy Text Ever Since The 1500s, When An .ac<br> porta sem turpis quis leo. Nulla in feugiat elit.</h3>
            <h5>1. Problem Solving</h5>
            <h5>2. Creative Idea</h5>
            <h5>3. Search a lot</h5>
            <h5>4. High Quality</h5>
            <a href="#" class="btn1">Contact Us</a>
        </div>
    </div>
    <div class="container3" id="Services">
        <h1>My Services</h1>
        <h2>Better Design, Better Expericences</h2>

        <div class="sbox">
            <div class="box">
                <img src="img/serv1.png">
                <h3>Mobile App Design</h3>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.dictaHii fuga error  molestiasioo voluptas corporis,hlo eaque harum! Sed est .</h1>
            </div>
            <div class="box">
                <img src="img/serv2.png">
                <h3>Website Design</h3>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.dictaHii fuga error  molestiasioo voluptas corporis,hlo eaque harum! Sed est .</h1>
            </div>
            <div class="box">
                <img src="img/serv3.png">
                <h3>Video Editing</h3>
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit.dictaHii fuga error  molestiasioo voluptas corporis,hlo eaque harum! Sed est .</h1>
            </div>
        </div>
    </div>
    <div class="container4" id="Portfolio">
        <h1>My Portfolio</h1>
        <h2>Some Of My Distinguished Works</h2>
        <div class="grid-container">
            <div class="grid-box">
                <img src="img/portfolio1.jpg">
                <h3>Development</h3>
                <span>Mobile app landing design & Services</span>
            </div>
            <div class="grid-box">
                <img src="img/portfolio2.jpg">
                <h3>Development</h3>
                <span>Website design & Services</span>
            </div>
            <div class="grid-box">
                 <img src="img/portfolio3.jpg">
                <h3>Development</h3>
                <span>Mobile app landing design & Services</span></div>
            <div class="grid-box">
                <img src="img/portfolio4.jpg">
                <h3>Development</h3>
                <span>Wensite design & Services</span>
            </div>
        </div>
    </div>
    <div class="container5" id="Contact">
        <div class="contact-box">
            <h1>Contact Us</h1>
            <h2>Lets Work Together</h2>
            <h3>Lorem Ipsum Is Simply Dummy Text Of <br>The Printing And Typesetting Industry</h3>
            <div class="contact-list">
           <h4>Nitish Raj<br>nitishr486@gmail.com<br>+91 6203746218</h4>
        </div>
        <div class="contact-icon">
            <a href="https://www.facebook.com/profile.php?id=100005288222662"> 
                <img src="img/Icon awesome-facebook-square.png">
            </a>
            <a href="https://www.instagram.com/nitish_raj_2110/"> 
                <img src="img/Icon awesome-instagram.png">
            </a>
            <a href=""> 
                <img src="img/Icon awesome-twitter-square.png">
            </a>
            <a href=""> 
                <img src="img/Icon zocial-email.png">
            </a>
        </div>
        </div>
        <div class="contact-box">
            <form action="demo.php"    method="POST">
				<input type="" placeholder="Enter Your Name" required="" name="name"><br>
				<input type="email" placeholder="Enter Your Email" required="" name="email"><br>
				<input type="" placeholder="Enter Your Subject" name="subject"><br>
				<textarea name="message" id="" cols="40" rows="10" placeholder="Enter Your Message" required=""></textarea><br>
				<input type="submit" value="Submit" class="send" name="submit"  onclick="msg()">
			</form>
        </div>
        <div class="footer">
            <h3>Developed  by Nitish Raj © 2022</h3>
        </div>
        <script>
function msg(){
  alert("Do you want to submit");

}
</script>


    </div>
    <?php

$servername="localhost";
$username="root";
$password="";
$database="potfolio";


$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
  
  echo "Connection error".mysqli_error();
}

  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

   $sql="INSERT INTO `contact` ( `name`, `email`, `subject`, `message`) VALUES ( ' $name', '$email', '$subject', '$message')";

$result=mysqli_query($conn,$sql);
 
if(!$result)
{
    echo "<br>". "your data is not inserted".mysqli_error();
}
else{
    
 }
  }
  
?>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typed = new Typed(".auto-run",{
        strings: ["Nitish Raj.","web developer.","Photographer.","Designer."],
        typeSpeed: 150,
        backSpeed:100,
        loop:true,
    });
</script>


</body>
</html>