<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<section id="Home">
<div class="container-fluid">  
    <nav>
        <a href="design.html"><img src="logo.png" class="logo"></a> 

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon"></i>
            <i class='bx bx-x' id="close-icon"></i>
        </label>

        <ul class="navbar">
            <li><a href="#Home" id="ge">Home</a></li>
            <li><a href="#About" id="ge">About Me</a></li>
            <li><a href="#Services" id="ge">Services</a></li>
            <li><a href="#Privacy" id="ge">Privacy Policy</a></li>
            <li><a href="register.html" id="ge">Login</a></li>
        </ul>
    </nav>
    
    <div class="content-fluid">
        <div class="content-fluid2">
            <div class="starter">
            <h1>WELCOME<br>TO NITZ CLO.</h1>
            <p>Ensuring that we serve you what you deserve.
                in Nitz Clo.what you see is what you get.
            </p>

            <div class="soc">
                <a href="https://www.tiktok.com/@nitsuzza" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                <a href="https://www.instagram.com/jazz_ab23/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://github.com/Nitsuzza" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/justinjazzM.abenir" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </div>

            </div>

        <div class="content-fluid2">
            <div class="card card1">
                 <h5>E-Sports Jersey</h5>
                 <p>blue</p>
            </div>
            <div class="card card2">
                <h5 style="color: white;">Basketball Jersey</h5>
                <p style="color: white;">Riaing</p>
            </div>
            <div class="card card3">
                <h5>Soccer</h5>
                <p>white</p>
            </div>
            <div class="card card4">
                <h5>Soccer</h5>
                <p>blue</p>
             </div>
             
            </div>
        </div>
    </div>
    
    </div>
    </div>
</div>
</section>
<section id="About">    
<div class="container-fluid2">   
    <h2>About Me</h2>
    <img style='border:3px solid #000000'src="jazz.jpg" class="pfp">
    <h3>A Joyful and Friendly IT student at National University Fairview, Who is also a Graphic artist in our small Family Business Which is Making Jersey's and other clothings.
        Being a Graphic Artist in our small business had given me a lot of opportunity, I have been able to express my creativity when it comes to making designs for the jerseys that we sell
        and because of that ever since when I learned how our business works it had led me into dreaming of Having my own Clothing some day that is why I came up with the name Nitz clo.
    </h3>
</div>
</section>

<section id="Services">
    <div class="container-fluid2">
    <div class="wrapper">
        <div class="image">
            <img src="ABC.jpg">
            <div class="content">
                <h1>Graphic Designing</h1>
                <p> Designing, layouts, etc</p>
            </div>
        </div>
    </div>
    </div>  

</section>

</style>

<section id="Privacy">
    <div class="container-fluid2">
    <h2>Privacy Policy</h2>
    <h4 style="color: white;">Last updated: 08.03.24</h4>
    <h5 style="color: gray;">Thank you for visiting Nitz Clothing This is our policies regarding the collection, use, and disclosure of Personal Information we 
        receive from users of the site.
    </h5>

    <h4 style="color: white;">Information Collection and Use</h4>
    <h5 style="color: gray;">While using our site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you.
        Personally identifiable information may include, but is not limited to, your name, email address, and phone number ("Personal Information").
    </h5>

    <h4 style="color: white;">Security</h4>
    <h5 style="color: gray;">The security of your Personal Information is important to us, but remember that no 
        method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your
        Personal Information, we cannot guarantee its absolute security.
    </h5>

    <h4 style="color: white;">Contact Us</h4>
    <h5 style="color: gray;">If you have any questions about this Privacy Policy, please contact us at [abenirjm@students.nu-fairview.edu.ph].
        <br> Remember, it's essential to tailor this policy to your specific website and its practices, and consider seeking legal advice to ensure compliance with relevant laws and regulations.
    </h5>
    <p style="text-align: center;">&copy; 2024 Jazz Abenir. All rights reserved.</p>
</div>
</section>
    <script type="text/javascript">
        window.addEventListener("scroll", function(){
            var header = document.querySelector("nav");
            header.classList.toggle("sticky", window.scrollY > 0)
        })
    </script>
</body>
</html>
