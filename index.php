<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-2.2.0.min.js"
      type="text/javascript"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- External styles -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />

    <!-- Favicon -->
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./assets/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="./assets/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="./assets/favicon/site.webmanifest" />
    <link
      rel="mask-icon"
      href="./assets/favicon/safari-pinned-tab.svg"
      color="#5bbad5"
    />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Styles-->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/leaf.css" />
    <link rel="stylesheet" href="./assets/css/auto_write.css" />

    <title>Yerba Tech</title>
  </head>
  <body>
    <!-- HEADER -->
    <header class="header">
      <nav class="navbar">
        <a href="#home" class="header_logo">
          <img
            src="./assets/images//yerba-tech-logo.png"
            alt="yerba-tech-logo"
          />
        </a>
        <button class="btn_hamburger" id="button_navbar">
          <img
            width="30"
            height="30"
            src="https://img.icons8.com/ios-filled/50/F0E0C6/menu--v1.png"
            alt="menu--v1"
          />
        </button>

        <ul class="navbar_links" id="links">
          <li>
            <a href="#home">Inicio</a>
          </li>
          <li>
            <a href="#about">Acerca</a>
          </li>
          <li>
            <a href="#technologies">Tecnologias</a>
          </li>
          <li>
            <a href="#clients">Clientes</a>
          </li>
          <li>
            <a href="./brief.pdf" target="_blank">Brief</a>
          </li>
          <li>
            <a href="#contact">Contacto</a>
          </li>
        </ul>
      </nav>
    </header>

    <!-- HOME SECTION -->
    <section id="home" class="hero-section">
      <h1 id="typewriter"></h1>
      <div class="leaf"></div>
      <div class="leaf"></div>
      <div class="leaf"></div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="about-section">
      <h2 class="section-title">Sobre nosotros</h2>
      <p>
        En Yerba Tech, creemos en la calidad por encima de la cantidad. Como una
        pequeña compania de software situada en el corazón de la innovación,
        nuestra filosofía se centra en establecer relaciones duraderas con una
        selección exclusiva de clientes. No aspiramos a ser los más grandes,
        sino los mejores en lo que hacemos.
      </p>
      <p>
        Hemos optado por una estrategia de crecimiento consciente y controlado.
        Nuestra visión a largo plazo se basa en la consistencia y la excelencia,
        no en la expansión. Elegimos trabajar estrechamente con nuestros
        clientes para comprender verdaderamente sus necesidades y ofrecer
        soluciones a medida que superen sus expectativas.
      </p>
      <p>
        Nuestro equipo está compuesto por expertos apasionados, dedicados a
        articular software de la más alta calidad. Al limitar deliberadamente el
        número de proyectos en los que trabajamos, garantizamos un servicio
        personalizado y productos que se destacan en el mercado por su robustez,
        eficiencia y diseño vanguardista.
      </p>
      <p>
        Confiamos en que al forjar alianzas estratégicas y enfocarnos en el
        servicio al cliente, podemos ofrecer una experiencia incomparable que
        beneficie a nuestros clientes a largo plazo. En Yerba Tech, no solo
        construimos software; construimos relaciones que perduran.
      </p>
    </section>

    <!-- TECHNOLOGIES SECTION -->
    <section id="technologies" class="technologies-section">
      <div id="stack-titles">
        <h2>Nuestras tecnologías</h2>
        <p>Descubrí el stack tecnológico que potencian a nuestros proyectos. </p>
      </div>
      <div class="stack-grid" >
        <img src="./assets/images/tech-icons/html-icon.png" alt="">
        <img src="./assets/images/tech-icons/css-icon.png" alt="">
        <img src="./assets/images/tech-icons/javascrip-icon.png" alt="">
        <img src="./assets/images/tech-icons/react-icon.png" alt="">
        <img src="./assets/images/tech-icons/php-icon.png" alt="">
        <img src="./assets/images/tech-icons/postgre-icon.png" alt="">
        <img src="./assets/images/tech-icons/mysql-icon.png" alt="">
        <img src="./assets/images/tech-icons/awa-icon.png" alt="">
        <img src="./assets/images/tech-icons/azure-icon.png" alt="">
      </div>
    </section>

    <!-- CLIENTS SECTION -->
    <section id="clients" class="clients-section">
      <div id="clients-titles">
        <h2 class="client-title">Clientes</h2>
        <p>Conoce los casos de exito de quienes confian en nosotros.</p>
      </div>
      <section class="customer-logos slider">
        <div class="slide">
          <img src="./assets/images/clients-logo/american-express-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/healty-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/henry-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/unlp-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/asistere-app.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/aysa-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/club-obras-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/cronicaTV-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/masinversiones-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/membly-logo.png" />
        </div>
        <div class="slide">
          <img src="./assets/images/clients-logo/nicar-logo.png" />
        </div>
      </section>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="contact-section">
      <h2 class="section-title">Contactanos</h2>
      <form  method="post" action="contacto.php" enctype="multipart/form-data" class="contact-form">
        <input type="text" name="fullName" placeholder="Nombre y Apellido" required />
        <input type="email" name="email" placeholder="Email" />
        <input type="text" name="company" placeholder="Tu empresa u organización" />
        <textarea name="info" placeholder="Dejanos tu consulta acá."></textarea>
        <button type="submit">Enviar consulta</button>
      </form>
    </section>

    <footer class="footer" id="footer">
      <a
        href="https://github.com/Yerba-Tech"
        target="_blank"
        aria-label="GitHub"
      >
        <i class="fab fa-github"></i
      ></a>
      <a
        href="https://twitter.com/yerbatech"
        target="_blank"
        aria-label="Twitter"
      >
        <i class="fab fa-twitter"></i
      ></a>
      <a
        href="https://www.linkedin.com/company/yerbatech"
        target="_blank"
        aria-label="LinkedIn"
      >
        <i class="fab fa-linkedin-in"></i>
      </a>
    </footer>
  </body>

  <!-- Scripts -->
  <script src="./assets/scripts/index.js"></script>
  <script src="./assets/scripts/auto_write.js"></script>
</html>
