<?php require_once './pages/includes/header.pages.php'; ?>
    <title>Stockash</title>
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
            <img src="assets/brand/logo.svg" alt="Stockash Logo" />
        </div>
        <div class="header__menu">
            <nav>
                <ul>
                    <li><a title="A Stockash" href="#stockash">A Stockash</a></li>
                    <li><a title="Soluções" href="#solucoes">Soluções</a></li>
                    <li><a title="Benefícios para os colaboradores" href="#colaboradores">Para os colaboradores</a></li>
                    <li><a title="Benefícios para o empregador" href="#empregadores">Para o empregador</a></li>
                    <li><a title="Dúvidas" href="#duvidas">Dúvidas</a></li>
                    <li><a title="Na Mídia" href="#midia">Na Mídia</a></li>
                    <li><a title="Contato" href="#contato">Contato</a></li>
                    <li><a title="Quem Somos" href="./sobre">Quem somos</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__contact">
            <span><a href="https://app.amfi.finance/pt/register" title="Invista agora" target="_blank">Invista agora</a></span>
        </div>
    </div>

    <!-- Mobile -->
    <div class="mobile-mode">
        <div class="header__logo">
            <img src="assets/brand/logo.svg" alt="Stockash Logo" />
        </div>
        <div class="header__contact">
            <span><a href="https://app.amfi.finance/pt/register" title="Invista agora" target="_blank">Invista agora</a></span>
            <input id='header__menu-toggle' type='checkbox' />
            <label for='header__menu-toggle' class='header__menu-btn-container'>
                <div class='header__menu-btn'></div>
            </label>

            <nav class='header__menu-mobile'>
                <ul>
                    <li><a title="A Stockash" href="#stockash">A Stockash</a></li>
                    <li><a title="Soluções" href="#solucoes">Soluções</a></li>
                    <li><a title="Benefícios para os colaboradores" href="#colaboradores">Para os colaboradores</a></li>
                    <li><a title="Benefícios para o empregador" href="#empregadores">Para o empregador</a></li>
                    <li><a title="Dúvidas" href="#duvidas">Dúvidas</a></li>
                    <li><a title="Na Mídia" href="#midia">Na Mídia</a></li>
                    <li><a title="Contato" href="#contato">Contato</a></li>
                    <li><a title="Quem Somos" href="./sobre">Quem somos</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="success__message">
    <h2 class="title">E-mail enviado com sucesso</h2>
</div>

<div class="error__message">
    <h2 class="title">Por favor, preencha todos os campos.</h2>
</div>

<!-- Banner -->
<div class="banner" id="top">
    <div class="container banner__grid">
        <div class="banner__contents">
            <h1 class="title">A maneira mais inteligente de extrair liquidez das suas Stock Options</h1>
            <p class="description">Somos a primeira fintech de crédito brasileira a fornecer soluções de Liquidity-as-a-Service para colaboradores com plano de Stock Options, desde startups a companhias abertas</p>
            <span><a href="#contato" class="cta" title="Comece já">Comece já</a></span>
        </div>
        <div class="banner__image">
            <img src="./assets/images/banner/banner.webp" alt="Stockash banner principal" />
        </div>
    </div>
</div>

<!-- Colaboradores -->
<section class="collaborator">
    <!-- Sliders -->
    <div id="stockash"></div>
    <div class="slide-desktop">
        <div class="slide-box-item-desktop">
            <p>Democratizamos o acesso à liquidez dos colaboradores através de suas Stock Options, de forma simples e inteligente.</p>
        </div>
        <div class="slide-box-item-desktop">
            <p>Educamos e ajudamos os funcionários de startups a destravar e maximizar do valor do seu ESOP (Employee Stock Ownership Plan) por meio de soluções de crédito.</p>
        </div>
        <div class="slide-box-item-desktop">
            <p>Trazemos liquidez para os colaboradores de startups para satisfazer as suas necessidades e realizar os seus sonhos, sem terem que vender uma única ação</p>
        </div>
    </div>
    <!-- <div class="slide-mobile">MOBILE</div> -->
    <div class="slide-mobile">
        <div class="slide-box-item-mobile slide-1">
            <p>Democratizamos o acesso à liquidez dos colaboradores através de suas Stock Options, de forma simples e inteligente.</p>
        </div>
        <div class="slide-box-item-mobile slide-2">
            <p>Educamos e ajudamos os funcionários de startups a destravar e maximizar do valor do seu ESOP (Employee Stock Ownership Plan) por meio de soluções de crédito.</p>
        </div>
        <div class="slide-box-item-mobile slide-3">
            <p>Trazemos liquidez para os colaboradores de startups para satisfazer as suas necessidades e realizar os seus sonhos, sem terem que vender uma única ação</p>
        </div>
    </div>
    
    <!-- Nossas soluções -->
    <div class="our-solutions">
        <div class="our-solutios-title">
            <h2 class="hidden-element" id="solucoes"><span class="title-color">Hidden</span> element</h2>
            <h2 class="title"><span class="title-color">Nossas</span> soluções</h2>
        </div>
        <div class="our-solutions-container">
            <a href="#contato">
                <div class="our-solutions-box-1">
                    <h2 class="title">Easy Options - Exerça suas Stock Options</h2>
                    <p class="description">Consiga o dinheiro para exercer suas tão suadas Stock Options</p>
                </div>
            </a>
            <a href="#contato">
                <div class="our-solutions-box-2">
                    <h2 class="title">Equity Flex - Consiga dinheiro usando suas Ações</h2>
                    <p class="description">Transforme suas ações em dinheiro para usar como quiser, e o melhor, você não precisa vender uma única ação</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Benefícios -->
    <div class="benefits">
        <div>
            <h2 class="hidden-element" id="colaboradores"><span class="title-color">Hidden</span> element</h2>
            <h2 class="title"><span class="benefits-title">Benefícios para</span> os colaboradores</h2>
            <div class="benefits-contents">
                <div class="benefits-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-1.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="benefits-small-content-1">Crédito rápido e digital</p>
                        <p class="benefits-small-content-2">Destrave o valor das suas Stock Options de maneira simples, rápida e totalmente digital</p>
                    </div>
                </div>
                <div class="benefits-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-2.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="benefits-small-content-1">Sem pagamento de parcelas</p>
                        <p class="benefits-small-content-2">Você não precisa perder o sono pensando em como pagar as parcelas, você só nos paga quando sua empresa tiver um evento de liquidez</p>
                    </div>
                </div>
                <div class="benefits-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-3.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="benefits-small-content-1">Mantenha todo o potencial de valorização das suas ações</p>
                        <p class="benefits-small-content-2">Nossos produtos são desenhados para que você não tenha que vender suas ações com descontos e mantenha todo o seu potencial de valorização</p>
                    </div>
                </div>
                <div class="benefits-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-4.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="benefits-small-content-1">Adiar o pagamento de impostos com ganhos de capital</p>
                        <p class="benefits-small-content-2">Ao contrário de uma venda no mercado secundário, nossas soluções são desenhadas para que você pague os impostos de ganho de capital somente no final da operação</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits__column-right">
            <img src="assets/images/collaborators/benefit-collaborator.webp" alt="benefícios para colaboradores" />
            <div class="tooltip">
                <p>Ideal para satisfazer uma necessidade ou realizar seus sonhos sem vender uma única ação.</p>
            </div>
        </div>
    </div>
</section>

<!-- Calculator -->
<section class="opportunities">
        <div class="opportunities__container">
        </div>
</section>

<!-- Employees -->
<section class="employees">    
    <!-- Solução -->
    <div class="solutions">
        <div class="solutions__container">
            <h2 class="hidden-element" id="empregadores"><span class="title-color">Hidden</span> element</h2>
            <h2 class="title"><span class="solutions-title">Benefícios para</span> o empregador</h2>
            <div class="solutions-contents">
                <div class="solutions-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-1.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="solutions-small-content-1">Benefício de liquidez recorrente</p>
                        <p class="solutions-small-content-2">O empregador pode oferecer um benefício customizado para seus colaboradores, definindo os critérios de elegibilidade e as limitações de financiamentos</p>
                    </div>
                </div>
                <div class="solutions-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-2.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="solutions-small-content-1">Maximizar a percepção de valor do plano de Stock Options</p>
                        <p class="solutions-small-content-2">Orientamos os colaboradores sobre as melhores alternativas para a maximização de valor de suas Stock Options, além de considerações legais, fiscais e outras implicações de longo prazo</p>
                    </div>
                </div>
                <div class="solutions-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-3.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="solutions-small-content-1">Atrair, engajar e reter talentos</p>
                        <p class="solutions-small-content-2">Nosso benefício exclusivo melhora a atratividade da empresa, aumenta o engajamento e a retenção de talentos, solidificando a cultura e senso de dono</p>
                    </div>
                </div>
                <div class="solutions-block">
                    <div>
                        <img src="assets/images/collaborators/icons/icon-4.svg" alt="Colaboradores ícone">
                    </div>
                    <div>
                        <p class="solutions-small-content-1">Captable inalterado</p>
                        <p class="solutions-small-content-2">Ao contrário de uma venda no mercado secundário, nossa solução mantém o captable da sua empresa inalterado, evitando assim sócios indesejados</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="solutions__column-right">
            <img src="assets/images/employees/benefits-employees.webp" alt="benefícios para empregadores" />
            <div class="tooltip">
                <p>Ofereça um benefício de liquidez recorrente para reter talentos e permanecer privado por mais tempo.</p>
            </div>
        </div>

        
    </div>
    <div class="know-more">
        <a class="know-more__link" href="#contato" title="Clique para se cadastrar">Quero entrar em contato</a>
    </div>
</section>

<section class="options">
    <div class="options__container">
        <span class="title">
            <img src="./assets/brand/unlock.svg" alt="unlock" />
        </span>
    </div>
</section>

<section class="attix">
    <div class="attix__container">
        <div>
            <a target="_blank" href="https://www.mattosfilho.com.br/en/attix/" title="Acesse o site do Mattos Filho">
                <img src="./assets/images/footer/attix-branco_startup-parceira1.webp" alt="attix startup parceria" />
            </a>
        </div>
        <div>
            <p class="description"><strong>attix</strong> é um programa de inovação do <strong>Mattos Filho</strong>.<br />
            Startups criteriosamente selecionadas participam de sessões de mentoria de produtos com seus especialistas, mantendo um contato próximo com Mattos Filho.</p>
        </div>
    </div>
    <div class="bizhub__container">
        <div class="bizhub-logo">
            <a target="_blank" href="https://www.bizhub.com.br/" title="Acesse o site da Bizhub">
                <img src="./assets/brand/Bizhub.png" alt="Bizhub" />
            </a>
        </div>
        <div>
            <p class="description">Ecossistema de inovação e tecnologia da Alvarez & Marsal</p>
        </div>
    </div>
</section>

<section class="questions" id="duvidas">
    <div class="questions__container">
        <div class="questions__left">
            <p class="title-small">Perguntas Frequentes</p>
            <h2 class="title">Ficou com alguma dúvida?</h2>
            <p class="description">Separamos algumas dúvidas comuns, mas caso essas não te ajudem, entre em contato com nosso time pelos canais de contato. Estamos prontos para te ajudar! ;)</p>
            <span class="questions__link">
                <a class="link" href="#contato" title="Entre em contato">Entre em contato</a>
            </span>
        </div>
        <div class="questions__right">
            <div class="accordion-container">
                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Posso confiar na Stockash?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">Sim! A Stockash é uma plataforma que oferece crédito on-line para colaboradores de startups e opera como um correspondente bancário, cumprindo todas as exigências legais brasileiras.</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Para quem é o serviço da Stockash?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">Nossos produtos são voltados para colaboradores que possuem Stock Options ou Ações de startups mais maduras e precisam de liquidez deixando as suas ações em garantia</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">A Stockash pede algum valor antecipado?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">Não! É importante lembrar que a Stockash não solicita nenhum valor adiantado. Caso você receba qualquer pedido de adiantamento, fique atento, pois trata-se de um golpe.</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Esse benefício vai gerar mais trabalho para o RH?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">Não! Diferente de um benefício de crédito consignado, em que o RH e Financeiro precisam enviar informações e realizar pagamentos mensais, o nosso benefício não traz trabalhos adicionais ao RH. Após a implementação do benefício, todo o relacionamento é feito diretamente com o colaborador.</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Como posso oferecer este benefício para meus colaboradores?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">É simples! Entre em contato com o nosso time para que a gente possa avaliar se a sua startup já é elegível para oferecer esse benefício</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Quais as vantagens da Stockash para minha startup?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">São várias! Entre elas, a sua startup vai conseguir atrair, engajar e reter mais talentos. Vai melhorar a percepção de valor do programa de Stock Options. Além disso, sua startup vai poder oferecer liquidez aos seus colaboradores que precisam de satisfazer alguma necessidade ou realizar um sonho, sem abrir mão do controle de Captable.</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Estou iniciando minha startup agora, é para mim?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">Ainda não, mas esperamos que em breve você seja nosso cliente. Focamos em startups em estágios mais avançados de maturidade.</p>
                    </div>
                </div>

                <div class="ac">
                    <h2 class="ac-header">
                        <button type="button" class="ac-trigger">Como consigo administrar o meu benefício?</button>
                    </h2>
                    <div class="ac-panel">
                        <p class="ac-text">É simples! Quando você faz uma operação com a gente, pode acompanhar a evolução do seu débito e valor das suas ações pela nossa plataforma digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section class="contact" id="contato">
    <div class="contact__container">
        <div class="contact__left">
            <h2 class="title">Que tal entrar em contato com a Stockash?</h2>
            <p class="description">Se você é Founder ou do RH descubra como as nossas soluções podem ajudar a transformar a sua startup. Se você é colaborador descubra como as nossas soluções podem ajudar a transformar a sua vida. Se é investidor e gostaria de saber como nossas soluções podem te dar acesso a investimentos exclusivos, entre em contato com a gente.</p>
        </div>
        <div class="contact__right">
            <div class="form__container">
                <form method="POST" class="form-home">
                    <label for="nome">Nome:*</label> 
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite seu nome" />
                    
                    <label for="email">E-mail:*</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Digite seu e-mail" />

                    <label for="telefone">Telefone</label> 
                    <input class="form-control" type="tel" name="telefone" id="telefone" placeholder="(00) 0 0000-0000" />

                    <label for="emp_invest">Você é empregador, colaborador ou investidor?</label>
                    <select class="form-control" name="emp_invest" id="emp_invest">
                        <option value="Selecione uma das opções">Selecione uma das opções</option>
                        <option value="Empregador">Empregador</option>
                        <option value="Colaborador">Colaborador</option>
                        <option value="Investidor">Investidor</option>
                    </select>

                    <label for="mensagem">Mensagem:*</label>
                    <textarea class="form-control-textarea" name="mensagem" id="mensagem" cols="30" rows="20"></textarea>

                    <div class="checkbox">
                        <input type="checkbox" id="aceito" class="checkbox" name="aceito" />
                        <label for="aceito">
                            Aceito receber comunicações via e-mail  
                        </label>
                    </div>
                    
                    <p class="description">Você poderá cancelar o envio dessas mensagens a qualquer momento. Em caso de dúvidas acesse nossa <a href="politicas-de-privacidade" target="_blank" title="Acesse nossa política de privacidade">Politica de Privacidade</a>. Esse formulário não é destinado para menores de 18 anos.</p>
                    <button class="btn-send" type="submit" name="send-email">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Estadão -->
<section class="state" id="midia">
    <h5 class="state__title">Stockash <span>na mídia</span></h5>
    <div class="state__links">
        <a href="https://www.estadao.com.br/link/inovacao/o-perfil-de-startups-que-conseguem-investimentos-mudou-veja-o-que-funciona/" class="state__link" target="_blank">
            <img src="./assets/images/state/state.webp" alt="Image do Estadão" />
            <p class="description">O perfil de Startups que conseguem investimentos mudou: veja o que funciona</p>
        </a>

        <a href="https://valor.globo.com/financas/criptomoedas/noticia/2023/07/19/fintech-que-adianta-stock-options-tokeniza-nota-comercial-de-r-110-mil.ghtml" class="state__link" target="_blank">
            <img src="./assets/images/state/valor.webp" alt="Image do Valor Econômico" />
            <p class="description">Fintech que adianta 'stock options' tokeniza nota comercial de R$ 110 mil</p>
        </a>
    </div>
</section>

<footer class="footer">
    <div class="footer__go-to-top">
        <a href="#top"><img src="./assets/brand/to-top.svg" alt="Go to top" /></a>
    </div>
    <section class="footer__container">
        <div class="footer__col-left">
            <img src="./assets/brand/logo-footer.svg" alt="Stockash brand">
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
        <p class="item">© Stockash Consultoria em Credito LTDA - 49.454.379/0001-07.<br>
2023 - Todos os direitos reservados. <a href="./politicas-de-privacidade">Políticas de Privacidade.</a></p>
    </section>
    
    <a class="linkedin__fixed" title="Entre em contato pelo WhatsApp" target="_blank" href="https://www.linkedin.com/company/stockash/">
        <img src="./assets/brand/linkedin.svg" alt="Linkedin logo fixed" />
    </a>

    <a class="whatsapp__fixed" title="Entre em contato pelo WhatsApp" target="_blank" href="https://api.whatsapp.com/send?phone=5511948819000&text=Conheci%20a%20Stockash%20pelo%20site.%20Gostaria%20de%20mais%20informa%C3%A7%C3%B5es">
        <img src="./assets/images/footer/whatsapp-icon.svg" alt="Logotipo do WhatsApp" />
    </a>

</footer>

<?php require_once './pages/includes/footer.pages.php'; ?>