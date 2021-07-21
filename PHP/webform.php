<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="webform.css" media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Questrial&display=swap"
      rel="stylesheet"
    />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-RD3KY4F12L"
    ></script>
    <!-- Hotjar Tracking Code for www.billy-e-riley.xyz -->
    <script>
      (function (h, o, t, j, a, r) {
        h.hj =
          h.hj ||
          function () {
            (h.hj.q = h.hj.q || []).push(arguments);
          };
        h._hjSettings = { hjid: 2504757, hjsv: 6 };
        a = o.getElementsByTagName("head")[0];
        r = o.createElement("script");
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
      })(window, document, "https://static.hotjar.com/c/hotjar-", ".js?sv=");
    </script>
    <link rel="stylesheet" href="CSS/navbar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
    <script src="main.js"></script>
</head>
<style>
    :root{
    --font-color:#555;
    --font-hover-color:orange;
}
body{
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:"Raleway", sans-serif;
    background-color:#627b8a;
}

.container{
    width:500px;
    box-shadow: 0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);
    padding:2em;
    background-color:#fff;
}
.form-group{
    margin-bottom:1.5em;
    transition:all .3s;
}
.form-label{
    font-size:.75em;
    color:var(--font-color);
    display:block;
    opacity:0;
    transition: all .3s;
    transform:translateX(-50px);
}
.form-control{
    box-shadow:none;
    border-radius:0;
    border-color:#ccc;
    border-style:none none solid none;
    width:100%;
    font-size:1.25em;
    transition:all .6s;
}
.form-control::placeholder{
    color:#aaa;
}
.form-control:focus{
    box-shadow:none;
    border-color:var(--font-hover-color);
    outline:none;
}
.form-group:focus-within{
    transform:scale(1.1,1.1);
}

.form-control:invalid:focus{
    border-color:red;
}
.form-control:valid:focus{
    border-color:green;
}

.btn{
    background: 0 0 #fff;
    border:1px solid #aaa;
    border-radius:3px;
    color:var(--font-color);
    font-size:1em;
    padding:10 50px;
    text-transform:uppercase;
}
.btn:hover{
    border-color:var(--font-hover-color);
    color:var(--font-hover-color);
}
textarea{
    resize:none;
}



.focused > .form-label{
    opacity:1;
    transform:translateX(0px);

}
</style>
<body>
<div class="nav-wrapper">
      <nav class="main-nav">
        <a href="index.html" class="hover-this"><span>Home</span></a>
        <a href="work.html" class="hover-this"><span>Work</span></a>
        <a href="#" class="hover-this"><span>About</span></a>
        <a href="#" class="hover-this"><span>Contact</span></a>
        <div class="cursor"></div>
      </nav>
      <button class="hamburger">
        <div class="bar"></div>
      </button>
    </div>
    <nav class="mobile-nav">
      <a href="index.html"><span>Home</span></a>
      <a href="work.html"><span>Work</span></a>
      <a href="#"><span>About</span></a>
      <a href="#"><span>Contact</span></a>
    </nav>
    <div class="container">
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="jane@doe.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Hello There!" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
</body>
<script>
    $(function() {
   
   $(".form-control").on('focus', function(){

       $(this).parents(".form-group").addClass('focused');

   });

   $(".form-control").on('blur', function(){

       $(this).parents(".form-group").removeClass('focused');

   });

});
    </script>
</html>