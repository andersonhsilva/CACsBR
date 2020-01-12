<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="css/favicon.ico" />
  <meta property="og:image" content="http://cacsbrasil.com.br/logo.png" />
  <script src='https://www.google.com/recaptcha/api.js'></script>

  <!-- icones -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  <title>CACs Brasil :: Juntos Somos Mais Fortes</title>
  <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>

</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col text-center">
        <img class="logo" src="logo.png" alt="">
      </div>
    </div>
    <div class="row mt-3">
      <div class="col text-center">
        <h2>Sou a favor da prática do tiro desportivo e da Legítima Defesa</h2>
        <h5>(Juntos podemos lutar pela melhora da situação dos CACs, no que diz respeito a efetivação do porte de arma geral, já se o descrito em lei "porte de trânsito" em alguns casos não é reconhecido nem mesmo respeitado pelas autoridades.)</h5>
      </div>
    </div>

    <div class="card mt-5 mb-5">
      <form action="cadastro.php" method="post">
        <div class="card-header">
          <h4>Cadastre-se, juntos somos mais forte!</h4>
          <h5>Dúvidas ou críticas no e-mail: <a href="mailto:atendimento@cacsbrasil.com.br">atendimento@cacsbrasil.com.br</a></h5>
        </div>
        <div class="card-body">
          <p class="card-text">Se quer ajudar a garantir e aumentar os direitos dos atiradores desportivos, cadaste-se e será muito bem vindo a nossa lista de contatos. Desta forma criamos um movimento único pelo Brasil a favor dos nossos direitos!!!</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-4">
              <div class="form-group">
                <label for="">Nome e Sobrenome <span class="obrigatorio">*</span></label>
                <input type="text" name="nome" class="form-control" placeholder="Informe seu nome e sobrenome">
              </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-4">
              <div class="form-group">
                <label for="">E-mail <i class="fas fa-envelope-open-text"></i> <span class="obrigatorio">*</span></label>
                <input type="email"name="email" class="form-control" placeholder="Informe seu e-mail">
              </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-4">
              <div class="form-group">
                <label for="phone">Contato <span style="color:#34af23"><i class="fab fa-whatsapp"></i> WhatsApp</span></label>
                <input type="tel" name="contato" class="form-control" placeholder="Ex.: 99 99999-9999 (apenas números)">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="">Cidade <span class="obrigatorio">*</span></label>
                <input type="text" name="cidade" class="form-control" placeholder="Informe a sua cidade">
              </div>
            </div>
            <div class="col-4">
              <div class="form-group">
                <label for="">Estado <span class="obrigatorio">*</span></label>
                <input type="text" name="uf" class="form-control maiusculo" placeholder="UF" maxlength="2">
              </div>
            </div>
          </div>

          <div class="form-group form-check">
            <input type="checkbox" name="receber" class="form-check-input" checked>
            <label class="form-check-label" for="">Desejo receber novidades sobre este projeto</label>
          </div>
        </div>

        <div class="form-group form-check">
          <div class="g-recaptcha" data-sitekey="6Lc90rkUAAAAAMqcMembFe4boUlhUDgv9nL3a8Uy"></div>
        </div>

        <div class="form-group form-check obrigatorio">
          Os campos marcados com um * são de preenchimento obrigatório.
        </div>

        <div class="row">
          <div class="col text-center mb-1">
            <?php
            //  variaveis para compartilhamento em redes sociais
            $url_atual = (isset($_SERVER['HTTPS']) ? "https" : "http")."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url_sharing = urlencode($url_atual); // codifica a url ṕara passagem de parametros no browser
            $img_sharing = 'https://cacsbrasil.com.br/logo.png';
            $text_sharing = 'Eu apóio o PL3723/19';
            $title_sharing = 'Eu apóio o PL3723/19 - Pela legítima defesa e a prática do tiro desportivo';
            ?>

            <!-- facebook -->
            <a style="color: #3b5998;" target="new" title="Compartilhar Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?=$url_sharing;?>"><i class="fab fa-facebook-square fa-2x"></i></a>&nbsp;

            <!-- twitter -->
            <a style="color: #00aced;" target="new" title="Compartilhar Twitter" href="https://twitter.com/intent/tweet?text=<?=$url_sharing;?>"><i class="fab fa-twitter-square fa-2x"></i></a>&nbsp;

            <!-- pinterest -->
            <a style="color: #cb2027" target="new" title="Compartilhar Pinterest" href="https://pinterest.com/pin/create/button/?url=<?= $url_sharing; ?>&media=<?=$img_sharing;?>&description=<?=$text_sharing;?>"><i class="fab fa-pinterest-square fa-2x"></i></a>&nbsp;

            <!-- linkedin -->
            <a style="color: #007bb6" target="new" title="Compartilhar Linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $url_sharing; ?>&title=<?=$title_sharing;?>&summary=&source="><i class="fab fa-linkedin fa-2x"></i></a>&nbsp;

          </div>
        </div>

        <div class="card-footer text-center">
          <button type="submit" class="btn btn-primary mt-4 mb-4">Eu apoio o projeto de lei</button>
        </div>
      </form>
    </div>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
