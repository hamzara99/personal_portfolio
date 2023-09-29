<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message =mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
    if(mysqli_num_rows($select_message) > 0 ){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, " INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent succesfully!';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <!--font awesome cdn link-->
    <link rel="stylesheet"href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!--aos css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!--style link-->
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

if(isset($message)){
    foreach($message as $message){
        echo '
    <div class="message" data-aos="zoom-out">
        <span>'.$message.'</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
    ';
    }
}
?>


    <!--header section start -->
    <header class="header">
    <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>
    <!--header section end--> 
    <!--home section start-->
    <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="images/user.jpg" alt="">
        </div>
        <div class="content" >
            <h3 data-aos="fade-up">Hi, I am Hamza Ramadi</h3>
            <span data-aos="fade-up">Web designer & developer</span>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quisquam ab rem? Accusantium tempora officiis quasi corrupti laudantium pariatur veritatis saepe repellat voluptates repudiandae quibusdam, similique porro, dolorum ducimus itaque.</p>
            <a data-aos="fade-up" href="#about" class="btn">About Me </a>   
        </div>
    </section>
    <!--home section end-->
    <!--about section start-->
    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
        <div class="biography" >
            <p data-aos="fade-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero aliquid repellendus asperiores dolores cupiditate ut aperiam ipsum assumenda, tenetur facere. Libero pariatur voluptas sunt reprehenderit esse quis optio, ex voluptate?</p>
            <div class="bio">
                <h3 data-aos="zoomi-in"> <span>Name : </span> Hamza Ramadi </h3>
                <h3 data-aos="zoomi-in"><span>email : </span> hamza.ramadi.3@gmail.com </h3>
                <h3 data-aos="zoomi-in"><span>Address : </span>Rue Abdeslam El Kabbaj Hassan Rabat</h3>
                <h3 data-aos="zoomi-in"><span>Phone : </span> +212-642602585 </h3>
                <h3 data-aos="zoomi-in"><span>Age: </span> 23 Years </h3>
                <h3 data-aos="zoomi-in"><span>Experience: </span> 1 year</h3>
            </div>
        <a href="#" class="btn" data-aos="fade-up">Download CV</a>
        </div>

        <div class ="skills" data-aos="fade-up">
            <h1 class="heading"><span>Skills</span></h1>

            <div class="progress">
            <div class="bar" data-aos="fade-left"><h3><span>HTML</span> <span>90%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>CSS</span> <span>90%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span> <span>70%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>MySQL</span> <span>75%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>PHP</span> <span>75%</span></h3></div>
            <div class="bar" data-aos="fade-right"><h3><span>Laravel</span> <span>75%</span></h3></div>
            <div class="bar" data-aos="fade-left"><h3><span>MongoDb</span> <span>75%</span></h3></div>
        </div>
    </div>
    <div class="edu-exp">

    <h1 class="heading" data-aos="fade-up"> <span>Education & Experience</span> </h1>

    <div class="row">

        <div class="box-container">
            <h3 class="title" data-aos="fade-up">Education</h3>

            <div class="box" data-aos="fade-right">
                <span>(2019 - 2020)</span>
                <h3>Bachelor Degree</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum inventore a repellat dolore ea dolores velit cumque corporis quasi eveniet, magni earum. Nobis dicta dolore tempora similique enim inventore.</p>

            </div>
            <div class="box" data-aos="fade-right">
                <span>(2020 - 2022)</span>
                <h3>Computer Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum inventore a repellat dolore ea dolores velit cumque corporis quasi eveniet, magni earum. Nobis dicta dolore tempora similique enim inventore.</p>
                
            </div>
            <div class="box" data-aos="fade-right">
                <span>(2022 - 2023)</span>
                <h3>Digital Development, Web Full Stack Option</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum inventore a repellat dolore ea dolores velit cumque corporis quasi eveniet, magni earum. Nobis dicta dolore tempora similique enim inventore.</p>
                
            </div>
        </div>
        <div class="box-container">
            <h3 class="title" data-aos="fade-left">Experience</h3>

            <div class="box" data-aos="fade-left">
                <span>(03/2022 - 04/2022)</span>
                <h3>internship at ALL FACILITY MANAGEMENT</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum inventore a repellat dolore ea dolores velit cumque corporis quasi eveniet, magni earum. Nobis dicta dolore tempora similique enim inventore.</p>

            </div>
            <div class="box" data-aos="fade-left">
                <span>(03/2023 - 04/2023)</span>
                <h3>internship at REDAL</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae dolorum inventore a repellat dolore ea dolores velit cumque corporis quasi eveniet, magni earum. Nobis dicta dolore tempora similique enim inventore.</p>
                
        </div>
    </div>
    </div>

    </div>

    </section>
    <!--about section end-->
    <!--services section start-->
    <section class="services" id="services">
        <h1 class="heading" data-aos="zoom-in"><span>services</span></h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fab fa-html5"></i>
                <h3>Front-end Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat eveniet voluptate et facilis maxime minus soluta totam a amet, reprehenderit eaque. Sapiente culpa tenetur architecto rem adipisci? Facilis, dolorum?</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-database"></i>
                <h3>Back-end Development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat eveniet voluptate et facilis maxime minus soluta totam a amet, reprehenderit eaque. Sapiente culpa tenetur architecto rem adipisci? Facilis, dolorum?</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-paint-brush"></i>
                <h3>Graphic designing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat eveniet voluptate et facilis maxime minus soluta totam a amet, reprehenderit eaque. Sapiente culpa tenetur architecto rem adipisci? Facilis, dolorum?</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress designing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat eveniet voluptate et facilis maxime minus soluta totam a amet, reprehenderit eaque. Sapiente culpa tenetur architecto rem adipisci? Facilis, dolorum?</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-bullhorn"></i>
                <h3>Digital marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat eveniet voluptate et facilis maxime minus soluta totam a amet, reprehenderit eaque. Sapiente culpa tenetur architecto rem adipisci? Facilis, dolorum?</p>
            </div>

            

            <div class="box" data-aos="zoom-in">
                <i class="fa-brands fa-bootstrap"></i>
                <h3>bootstrap designing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum placeat eveniet voluptate et facilis maxime minus soluta totam a amet, reprehenderit eaque. Sapiente culpa tenetur architecto rem adipisci? Facilis, dolorum?</p>
            </div>

        </div>

    </section>
    <!--services section end-->
    <!--portfolio section start-->
    <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>Portfolio</span></h1>
    
        <div class="box-container">

        <div class="box" data-aos="zoom-in">
            <img src="images/img1.png" alt="">
            <h3>Full-Stack Developer</h3>
            <span>(2021-2023)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img2.png" alt="">
            <h3>Full-Stack Developer</h3>
            <span>(2021-2023)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img3.png" alt="">
            <h3>Full-Stack Developer</h3>
            <span>(2021-2023)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img4.png" alt="">
            <h3>Full-Stack Developer</h3>
            <span>(2021-2023)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img5.png" alt="">
            <h3>Full-Stack Developer</h3>
            <span>(2021-2023)</span>
        </div>
        <div class="box" data-aos="zoom-in">
            <img src="images/img6.png" alt="">
            <h3>Full-Stack Developer</h3>
            <span>(2021-2023)</span>
        </div>
    </div>
    </section>
    <!--portfolio section end-->
    <!--contact section start-->
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"><span>Contact Me</span></h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="Enter Your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="Enter Your email" class="box" required>

            </div>
            <input data-aos="fade-up" type="number" name="number" min="0" placeholder="Enter Your number" class="box" required>
            <textarea data-aos="fade-up" name="Message"  class="box" required placeholder="Enter Your Message" cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="Send Message" name="send" class="btn">
        </form>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+212-642-602585</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>hamza.ramadi.3@gmail.com</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Rue Abdeslam El Kabbaj Hassan Rabat</p>
            </div>

        </div>
    </section>
    <!--contact section end-->

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Hamza Ramadi</span></div>





    
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


    <script>

        AOS.init({
            duration:800,
            delay:300,
        });
    </script>









    
</body>
</html>