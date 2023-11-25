<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>

    <link rel="website icon"type="png" href="logo.png">

<style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: aliceblue;
        }
      a{
        background-color: rgba(0, 0, 0, 0.8);
        text-decoration: none;
        color: white;
        border: 3px solid rgba(0, 0, 0, 0.8);
        border-radius: 15px;
        padding: 9px;
        border-top-right-radius: 5px;
        border-bottom-left-radius: 5px;
        padding-left:15px;
        right: 50%;
      }
      a:hover{
        background-color: dodgerblue;
      }
      header{
        text-align: center;
      }
     img{
      width: 300px;
      height: 300px;
      border-radius: 50%;
     }
     .box{
      position:absolute;
      bottom: 40%;
      left: 40%; 
      right: 0;
      margin: auto;
     }
     .link{
      position:absolute;
      bottom: 35%;
      left: 45%; 
     }
     .cpr{
      left:50%;
     }
     .botão{
      bottom: 30%;
     }
     .social-links{
      padding: 1px;
     }
</style>
</head>

<body>
  <br<br>
<div class="botão">
  <button onclick="scrollToBottom()">Sobre a Empresa</button>
</div>
<hr>

  <script>
    function scrollToBottom() {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth'
        });
    }
</script>
  <header>
    <h1>Ravens</h1>
    <h2>Gerenciamento de Atletas e influencers</h2>
</header>

 <div class="box">
  <img src = "Logo.jpeg" />
      <br>
    </div> 
      <div class="link">
        <a href="http://localhost/Login.php">Login</a>
        <a href="http://localhost/formulario.php">Cadastro</a>
      </div>



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<hr>
      <div class="footer-info">
          <h3>Sobre a Empresa</h3>
          <p>A Empresa de Gestão de Atletas é líder no mercado, proporcionando suporte abrangente e personalizado para atletas profissionais em todo o mundo. Com uma equipe dedicada de especialistas em gestão esportiva, nos orgulhamos de oferecer serviços de alta qualidade para maximizar o potencial de nossos clientes.</p>
      </div>
      <div class="contact-info">
          <h3>Informações de Contato</h3>
          <p>Entre em contato conosco para saber mais sobre nossos serviços ou agendar uma consulta.</p>
          <ul>
              <li>Email: Ravens@gestaodeatletas.com</li>
              <li>Telefone: +11 1249-5789</li>
              <li>Endereço: R. Visc. de Pirajá, 550-580 - Ipanema, Rio de Janeiro - RJ, 22410-002 , Brasil</li>
          </ul>
      </div>
      <div class="social-links">
          <h3>Siga-nos</h3>
          <ul>
              <li><a href="https://www.facebook.com/gestaodeatletas">Facebook</a></li>
              <br> <br>
              <li><a href="https://twitter.com/gestaodeatletas">Twitter / X</a></li>
              <br><br>
              <li><a href="https://www.instagram.com/gestaodeatletas">Instagram</a></li>
              
          </ul>
      </div>
      <p class="copyright">&copy; 2023 Gestão de Atletas</p>
  </footer>
  
  </footer>
</div>

</body>
</html>
