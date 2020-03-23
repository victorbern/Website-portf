<!DOCTYPE.html>
<html>
<head>
  <title>Página Inicial</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <header>
    <?php
      require_once "menu.php";
     ?>
  </header>
  <article class="conteudoBox">
    <p>
      Olá, me chamo Victor Bernardo de Oliveira e trabalho com Desenvolvimento de Softwares e Desenvolvimento WEB.
      Estudei entre os anos de 2017-2019 no Instituto Federal de Educação, Ciência e Tecnologia de São Paulo - Câmpus
      Bragança Paulista, onde concluí (em dezembro de 2019) o curso 'Técnico em Informática Integrado ao Ensino Médio'.
      Resolvi, através daqui, mostrar alguns trabalhos que fiz - incluindo o próprio site em questão.
      Espero que tenham todos uma boa navegação.
    </p>
    <br>
    <table class="margin-table background_color-table">
      <thead>
        <th><img src="img/foto_perfil2.jpg" alt="Este sou eu." class="foto_perfil"></th>
        <th class="width-th">
          <p class="nome_perfil credito_perfil">Victor Bernardo de Oliveira</p>
          <p class="idade_perfil credito_perfil">18 anos</p>
          <p class="descricao credito_perfil">Um entusiasta na tecnologia atual.</p>
        </th>
      </thead>

      <tbody class="redes_sociais">

        <tr>
          <th colspan="2">
            <a href="//www.github.com/victorbern" class="icones-links"><img src="img/icon_github.png" class="icone-margin-top" width="30" height="30" style="margin-top: 20"></a>
            <a href="//www.twitter.com/victor_berni" class="icones-links"><img src="img/icon_twitter.png" class="icone-margin-top" width="30" height="30" style="margin-top: 20"></a>
            <a href="//www.facebook.com/victor.bernardo.906" class="icones-links"><img src="img/icon_facebook.png" class="icone-margin-top" width="30" height="30" style="margin-top: 20"></a>
          </th>
        </tr>
      </tbody>
    </table>
    <!-- <div class="creditoBox">
      <img src="img/foto_perfil2.jpg" alt="Este sou eu." class="foto_perfil">
      <p class="nome_perfil">Victor Bernardo de Oliveira</p>
      <p class="idade_perfil">18 anos</p>
      <p class="descricao">Um entusiasta na tecnologia.</p>
    </div> -->

  </article>
  <footer>
    roda pé
  </footer>
</body>
</html>
