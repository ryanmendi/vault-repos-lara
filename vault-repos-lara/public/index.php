<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  
  <title>My Website</title>
  <style>
    /* Slider Section Styles */
#highlighted-repositories {
  padding: 50px 0;
  background-color: #f9f9f9;
}

.highlighted-repositories .section-title {
  text-align: center;
  margin-bottom: 30px;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.card {
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  width: 300px;
  text-align: center;
  transition: transform 0.3s;
}

.card:hover {
  transform: scale(1.05);
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.card-content {
  padding: 20px;
}

.card-content h2 {
  font-size: 1.5rem;
  margin-bottom: 10px;
}

.card-content p {
  font-size: 1rem;
  color: #666;
}

.card-content .cta {
  display: inline-block;
  margin-top: 15px;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.card-content .cta:hover {
  background-color: #0056b3;
}

  </style>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <img id="logo" src="tcc2.png" alt="">
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Nossa Missao</a></li>
            <li><a href="#Destaque" data-after="Destaque">Destaques</a></li>
            <li><a href="#about" data-after="About">Sobre Nós</a></li>
            <li><a href="#contact" data-after="Contact">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Conectando Ideias,<span></span></h1>
        <h1> Construindo Carreiras.<span></span></h1>
        <a href="#Destaque" type="button" class="cta">destaques</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Nossa Missão</h1>
        <p></p>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Missão</h2>
          <p> Somos um grupo de estudantes da Etec de Guarulhos focado em registrar os projetos de tcc realizados pelos alunos, para garantir a continuidade dos projetos, pois muitas vezes os alunos tem dificuldade de escolher um tema para o TCC e vários projetos abandonados que poderiam tornar o ambiente da Etec e o mundo melhor.
            Nossa proposta  é registrar e  conectar os projetos de TCC que Muitas estão registrados apenas pelos proprios alunos e pelos professores ou numa monografia encadrnada na biblioteca.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Visão</h2>
          <p> Promover o registro de projetos 
            que beneficiam a comunidade e a etec, garantir a continuidade de ideias, tornar-nos uma referencia em construir projetos conjuntos e conectar propostas  e realizadores.
                  Tornar sonhos reais e facilitar a construção de prototipos.</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Valores</h2>
          <p>Inovação 
            Companherismo
            Excelencia 
            Criatividade
            Segurança 
            Confiabilidade
            Sustentabilidade</p>
        </div>
        
      </div>
    </div>
  </section>
  <!-- End Service Section -->

  <!-- Slider Section -->
    <!-- Slider Section -->
<section id="Destaque">
  <div class="highlighted-repositories container">
    <h1 class="section-title">Repositórios <span>em destaques</span></h1>
    <div class="card-container">
      <div class="card">
        <img src="tcc2.png" alt="Repo 1">
        <div class="card-content">
          <h2>Repositório 1</h2>
          <p>Descrição breve do repositório 1. Inclua detalhes sobre o que ele faz e por que é interessante.</p>
          <a href="#" class="cta">Ver mais</a>
        </div>
      </div>
      <div class="card">
        <img src="tcc2.png" alt="Repo 2">
        <div class="card-content">
          <h2>Repositório 2</h2>
          <p>Descrição breve do repositório 2. Inclua detalhes sobre o que ele faz e por que é interessante.</p>
          <a href="#" class="cta">Ver mais</a>
        </div>
      </div>
      <div class="card">
        <img src="tcc2.png" alt="Repo 3">
        <div class="card-content">
          <h2>Repositório 3</h2>
          <p>Descrição breve do repositório 3. Inclua detalhes sobre o que ele faz e por que é interessante.</p>
          <a href="#" class="cta">Ver mais</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Slider Section -->

  <!-- End slider Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="tcc2.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">SOBRE <span>NÓS</span></h1>
        <h2>Repositorio Vault</h2>
        <p>Somos um grupo dedicado de desenvolvedores e entusiastas da
           tecnologia comprometidos em criar soluções que facilitam o apren
           dizado e o compartilhamento de conhecimento. Nosso projeto mais recente é
            um site inovador, desenvolvido especialmente para a ETEC, que serve como um r
            epositório de Trabalhos de Conclusão de Curso (TCCs).</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contatos</h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 234 123 1234</h2>
            <h2>+1 234 123 1234</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>info@gmail.com</h2>
            <h2>abcd@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Endereço</h1>
            <h2>Fatikchhari, Chittagong, Bangladesh</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>V</span>ault <span>R</span>epos</h1>
      </div>
      <h2></h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2020 Arfan. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>