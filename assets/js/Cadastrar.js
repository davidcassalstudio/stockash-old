class Cadastrar {
    static formDataDashboard(){
        console.log('TESTE')
        $('.register-form').on('submit', function(e) {
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

                window.location.href = 'https://stockash.com/cadastro-realizado';
            }
        })
    }
}



