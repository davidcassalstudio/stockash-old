<?php 
require_once 'includes/header.pages.php';?>
    <title>Stockash - Cadastre-se</title>
    <meta name="description" content="A Stockash é a primeira fintech de crédito brasileira a fornecer soluções de Liquidity-as-a-Service para colaboradores com plano de Stock Options, desde startups a companhias abertas">
    <link rel="stylesheet" href="./assets/css/styles.css" />
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNCC2BM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="header">
    <!-- Desktop -->
    <div class="desktop-mode">
        <div class="header__logo">
            <a href="." title="Voltar para o site da Stockash">
                <img src="./assets/brand/brand.webp" alt="Stockash Logo" />
            </a>
        </div>
        <div class="header__contact">
            <span><a href="cadastrar" title="Começar">Começar</a></span>
        </div>
    </div>

    <!-- Mobile -->
    <div class="mobile-mode">
        <div class="header__logo">
            <a href="." title="Voltar para o site da Stockash">
                <img src="./assets/brand/brand-mobile.webp" alt="Stockash Logo" />
            </a>
        </div>
        <div class="header__contact">
            <span><a href="cadastrar" title="Começar">Começar</a></span>
        </div>
    </div>
</header>

<section class="register">
    <div>
        <p>*As informações do formulário são necessárias para prepararmos o seu dashboard.</p>
    </div>
    
    <form method="POST" class="register-form">
        <label for="nome">Nome completo:*</label> 
        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome" />
        
        <label for="email">E-mail corporativo:*</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu e-mail" />

        <label for="telefone">Telefone:*</label> 
        <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="(00) 0 0000-0000" />

        <label for="senha">Senha:*</label> 
        <input class="form-control" type="password" name="senha" id="senha" placeholder="******" />
        
        <button class="btn-send" type="submit" name="send-register">Começar</button>
    </form>
</section>

<footer class="footer">
    <section class="footer__container">
        <div class="footer__col-left">
            <img src="./assets/brand/brand.webp" alt="Stockash brand">
            <p class="description">A Stockash é uma plataforma digital que atua como correspondente Bancário para facilitar o processo de contratação de empréstimos. Como Correspondente Bancário, seguimos as diretrizes da Resolução nº 3.954 do Banco Central do Brasil. Atenção: Em nenhuma hipótese solicitamos qualquer tipo de depósito, pagamento ou valor antecipado para análise cadastral ou aprovação do seu empréstimo. Em caso de dúvidas, entre em contato conosco em nossos canais oficiais.</p>
            <div class="social-media">
                <div class="email">
                    <a title="Fale conosco por e-mail" class="link" target="_blank" href="mailto:contato@stockash.com"></a>
                </div>
                <div class="linkedin">
                    <a title="Acesse nosso LinkedIn" class="link" target="_blank" href="https://www.linkedin.com/company/stockash/"></a>
                </div>
                <div class="whatsapp">
                    <a title="Entre em contato pelo WhatsApp" class="link" target="_blank" href="https://api.whatsapp.com/send?phone=5511948819000&text=Conheci%20a%20Stockash%20pelo%20site.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es"></a>
                </div>
            </div>
        </div>
        <div class="separator"></div>
    </section>
    <section class="copyright">
        <p class="item">© Stockash Consultoria em Credito LTDA - 49.454.379/0001-07.
        <br>2023 - Todos os direitos reservados.</p>
    </section>

    <a class="whatsapp__fixed" title="Entre em contato pelo WhatsApp" target="_blank" href="https://api.whatsapp.com/send?phone=5511948819000&text=Conheci%20a%20Stockash%20pelo%20site.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es">
        <img src="./assets/images/footer/whatsapp-icon.svg" alt="Logotipo do WhatsApp" />
    </a>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="assets/js/Cadastrar.js"></script>
<script src="assets/js/InitCadastrar.js"></script>
</body>
</html>