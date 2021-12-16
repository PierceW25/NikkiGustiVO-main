<!DOCTYPE html>
<html>
    <head>
        <title>Nikki Gusti- Testimonials</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="test.css">
        <link href="/static/css/styles.css" rel="stylesheet">
    </head>

    <header>
        <h3 class="bio"><a href="bio.php">Biography</a></h3>
            <a class="header-twitt" href="https://twitter.com/Taste_My_Voices" target="_blank"><img src="https://piercew25.github.io//NikkiGustiVO-main/audio/673524.png"></a>
            <h2><a href="index.php">TasteMy<span>Voice</span></a></h2>
            <a class="header-ig" href="https://www.instagram.com/teqillakween/" target="_blank"><img src="https://piercew25.github.io//NikkiGustiVO-main/audio/1491579602-yumminkysocialmedia36_83067.png"></a>
            <h3 class="test"><a href="test.php">Testimonials</a></h3>
    </header>
    
    <body>
        <div class="hero">
            <img src="https://ih1.redbubble.net/image.842184856.3113/st,small,507x507-pad,600x600,f8f8f8.jpg">
            <h1>Nikki Gusti A Voice Actor With Gusto</h1>
        </div>
        <div class="testies">
            <ul>
                <li>
                    <img src="https://lh3.googleusercontent.com/proxy/1pbSc2B7f8NaA65j_gH597VgWr2jPHJKuZ-TcOA1ZlPCb9ouI0s8aceFKR_r6FAfj0dPJr12v9sSKDmAA1KjnCXWKEN4KQxDopXrzvEhX5l-w5rdT7LmJQQI">
                    <p> monial monial monial monial monial monial monial monial monial monial monial monial</p>
                </li>
                <li>
                    <img src="https://lh3.googleusercontent.com/proxy/1pbSc2B7f8NaA65j_gH597VgWr2jPHJKuZ-TcOA1ZlPCb9ouI0s8aceFKR_r6FAfj0dPJr12v9sSKDmAA1KjnCXWKEN4KQxDopXrzvEhX5l-w5rdT7LmJQQI">
                    <p>monial monial monial monial monial monial monial monial monial</p>
                </li>
                <li>
                    <img src="https://lh3.googleusercontent.com/proxy/1pbSc2B7f8NaA65j_gH597VgWr2jPHJKuZ-TcOA1ZlPCb9ouI0s8aceFKR_r6FAfj0dPJr12v9sSKDmAA1KjnCXWKEN4KQxDopXrzvEhX5l-w5rdT7LmJQQI">
                    <p> monial monial monial monial monial monial monial monial monial</p>
                </li>
            </ul>
        </div>

        <div class="quotes">
            <p>"A fresh female voice actor with a diverse skill set and global appeal"</p> 
         </div>

         <div class="quotes">
             <p>"VO Mid-Atlantic, North American Accent"</p>
         </div>

         <div class="quotes">
             <p>"Authentic Conversational Speaking Style"</p>
         </div>

        <form class="email-me">
            <h2>Contact Me!</h2>
            <br>
            <input type="text" id="name" name="name" placeholder="Full Name">
            <br>
            <input type="text" id="email" name="email" placeholder="Email">
            <br>
            <input type="text" id="subject" name="subject" placeholder="Subject">
            <br>
            <input type="text" id="message" name="message" placeholder="Message">
            <input type="submit" value="Send">
        </form>
        <script>
            var slideIndex = 0;
            carousel();
            
            function carousel() {
              var i;
              var x = document.getElementsByClassName("quotes");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none"; 
              }
              slideIndex++;
              if (slideIndex > x.length) {slideIndex = 1} 
              x[slideIndex-1].style.display = "block"; 
              setTimeout(carousel, 4000); 
            }
            </script>
    </body>

    <footer>
        <ul class="contacts">
            <li>Phone Number: 804-539-8443</li>
            <li>Email Address: ngusti@gmail.com</li>
        </ul>
            <img src="https://ih1.redbubble.net/image.842184856.3113/st,small,507x507-pad,600x600,f8f8f8.jpg">
        <ul class="socials">
            <li><a href="https://twitter.com/Taste_My_Voices" target="_blank"><img src="https://piercew25.github.io//NikkiGustiVO-main/audio/673524.png"></a></li>
            <li><a href="https://www.instagram.com/teqillakween/" target="_blank"><img src="https://piercew25.github.io//NikkiGustiVO-main/audio/1491579602-yumminkysocialmedia36_83067.png"></a></li>
        </ul>
    </footer>
</html>
