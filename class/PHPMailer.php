<?php 

class PHPMailer
{
    public static function sendEmail($nome,$email,$telefone,$emp_invest,$mensagem,$aceito)
    {
        $status = $aceito == 'on' ? 'Sim' : 'Não';
        // $to = "luizgidrao@gmail.com, contato@stockash.com, leopoldofbraga@gmail.com, leopoldobraga@stockash.com";
        $to = "rafaelmacedosilva88@hotmail.com, davidcassal@gmail.com";

        $subject = "Contato"; 

        $message = "
            <html>
                <head>
                    <title>{$subject}</title>
                </head>
                <body style='background-color: #F4F4F4; padding: 32px;'>
                    <div style='max-width: 480px; margin: 0 auto; padding: 24px; background: #fff; border-radius: 8px; text-align: center;'>
                        <img src='https://stockash.com/assets/brand/brand.webp' />

                        <hr style='width: 100%; height: 0.15px; margin: 32px 0; border: 1px solid rgba(0,0,0,.1);'>

                        <ul style='padding: 0;'>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Nome:</strong> <br /> {$nome}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>E-mail:</strong> <br /> {$email}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Telefone:</strong> <br /> {$telefone}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Empregador, colaborador ou investidor:</strong> <br /> {$emp_invest}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Mensagem:</strong> <br /> {$mensagem}</li>
                            <li style='list-style: none; text-align: left;'><strong>Aceita receber e-mails?</strong> <br /> {$status}</li>
                        </ul>

                        <hr style='width: 100%; height: 0.15px; margin: 32px 0; border: 1px solid rgba(0,0,0,.1);'>

                        <p>E-mail enviado de <a href='https://stockash.com' target='_blank'>https://stockash.com</a></p>
                    </div>
                </body>
            </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <contato@stockash.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
    }

    public static function sendRegister($nome,$email,$telefone,$senha)
    {
        // $to = "luizgidrao@gmail.com, contato@stockash.com, leopoldofbraga@gmail.com, leopoldobraga@stockash.com";
        $to = "rafaelmacedosilva88@hotmail.com, davidcassal@gmail.com";

        $subject = "Formulário de Registro"; 

        $message = "
            <html>
                <head>
                    <title>{$subject}</title>
                </head>
                <body style='background-color: #F4F4F4; padding: 32px;'>
                    <div style='max-width: 480px; margin: 0 auto; padding: 24px; background: #fff; border-radius: 8px; text-align: center;'>
                        <img src='https://stockash.com/assets/brand/brand.webp' />

                        <hr style='width: 100%; height: 0.15px; margin: 32px 0; border: 1px solid rgba(0,0,0,.1);'>

                        <ul style='padding: 0;'>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Nome:</strong> <br /> {$nome}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>E-mail:</strong> <br /> {$email}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Telefone:</strong> <br /> {$telefone}</li>
                            <li style='list-style: none; margin-bottom: 8px; text-align: left;'><strong>Mensagem:</strong> <br /> {$senha}</li>
                        </ul>

                        <hr style='width: 100%; height: 0.15px; margin: 32px 0; border: 1px solid rgba(0,0,0,.1);'>

                        <p>E-mail enviado de <a href='https://stockash.com' target='_blank'>https://stockash.com</a></p>
                    </div>
                </body>
            </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <contato@stockash.com>' . "\r\n";

        mail($to,$subject,$message,$headers);
    }
}