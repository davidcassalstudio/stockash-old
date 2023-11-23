class App {
    static sliderCarousel(){
        $(document).ready(() => {
            $('.collaborator .slide-mobile').slick({
                dots: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 300,
                infinite: true,
            })
        })
    }

    static formDataHomeEmail(){
        $('.success__message').hide();
        $('.error__message').hide();
        
        $('.form-home').on('submit', function(e){
            e.preventDefault();

            const nome = $('#nome').val(); 
            const email = $('#email').val();
            const telefone = $('#telefone').val();
            const emp_invest = $('#emp_invest').val();
            const mensagem = $('#mensagem').val();
            const aceito = $('#aceito').val();    

            if(nome != '' &&
                email != '' &&
                telefone != '' &&
                emp_invest != '' &&
                mensagem != '' &&
                aceito != ''){
                    const dados = new FormData();
                    console.log('OK')
                    dados.append('nome', nome);
                    dados.append('email', email);
                    dados.append('telefone', telefone);
                    dados.append('emp_invest', emp_invest);
                    dados.append('mensagem', mensagem);
                    dados.append('aceito', aceito);
            
                    $('#nome').val('');
                    $('#email').val('');
                    $('#telefone').val('');
                    $('#emp_invest').val('');
                    $('#mensagem').val('');
                    $('#aceito').val('');

                    $('.success__message').slideDown().delay(5000).fadeOut(1200);

                    $.ajax({
                        url: 'process.php',
                        method: 'post',
                        data: dados,
                        processData: false, 
                        contentType: false,
                    }).done(function(response){
                        console.log(response);
                    })
            }else {
                console.log("DEU ERRO")
                $('.error__message').slideDown().delay(1500).fadeOut(1200);                        
            }
        })

    }

    static formDataDashboard(){
        console.log('TESTE')
        $('.register-form"').on('submit', function(e) {
            e.preventDefault();

            const nome = $('#nome').val();
            const email = $('#email').val();
            const telefone = $('#telefone').val();
            const senha = $('#senha').val();

            console.log(nome);
            console.log(email);
            console.log(telefone);
            console.log(senha);

            if(nome != '' &&
               email != '' &&
               telefone != '' &&
               senha != ''){
                const dados = new FormData();

                dados.append('nome', nome);
                dados.append('email', email);
                dados.append('telefone', telefone);
                dados.append('senha', senha);

                $.ajax({
                    url: 'process-register.php',
                    method: 'post',
                    data: dados,
                    processData: false,
                    contentType: false 
                }).done(function(response){
                    console.log(response)
                })
            }
        })
    }

    static AccordionAction(){
        // LIB --> https://github.com/michu2k/Accordion
        new Accordion('.accordion-container');
    }
}



