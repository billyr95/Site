<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
  </head>
  <body>
    <div class="nav-wrapper">
      <nav class="main-nav">
        <a href="index.html" class="hover-this"><span>Home</span></a>
        <a href="work.html" class="hover-this"><span>Work</span></a>
        <a href="about.html" class="hover-this"><span>About</span></a>
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
      <a href="about.html"><span>About</span></a>
      <a href="#"><span>Contact</span></a>
    </nav>
      <main>
          <p>Send E-Mail</p>
          <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="mail" placeholder="Your e-mail">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">SEND MAIL ????</button>
        </form>
      </main>
    <!--nav JS-->
    <script>
      (function () {
        const link = document.querySelectorAll("nav > .hover-this");
        const cursor = document.querySelector(".cursor");

        const animateit = function (e) {
          const span = this.querySelector("span");
          const { offsetX: x, offsetY: y } = e,
            { offsetWidth: width, offsetHeight: height } = this,
            move = 25,
            xMove = (x / width) * (move * 2) - move,
            yMove = (y / height) * (move * 2) - move;

          span.style.transform = `translate(${xMove}px, ${yMove}px)`;

          if (e.type === "mouseleave") span.style.transform = "";
        };

        const editCursor = (e) => {
          const { clientX: x, clientY: y } = e;
          cursor.style.left = x + "px";
          cursor.style.top = y + "px";
        };

        link.forEach((b) => b.addEventListener("mousemove", animateit));
        link.forEach((b) => b.addEventListener("mouseleave", animateit));
        window.addEventListener("mousemove", editCursor);
      })();
    </script>

    <!--Hamburger JS-->
    <script>
      window.onload = function () {
        const menu_btn = document.querySelector(".hamburger");
        const mobile_menu = document.querySelector(".mobile-nav");

        menu_btn.addEventListener("click", function () {
          menu_btn.classList.toggle("is-active");
          mobile_menu.classList.toggle("is-active");
        });
      };
    </script>
  </body>
</html>
