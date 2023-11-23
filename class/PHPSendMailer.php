<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

class PHPSendMailer
{
    public static function sendEmail($nome,$email,$telefone,$emp_invest,$mensagem,$aceito)
    {
        $mail = new PHPMailer(true);
        $status = $aceito == 'on' ? 'Sim' : 'Não';
        $message = self::templateHTML($nome,$email,$telefone,$emp_invest,$mensagem,$status);

        try {
            $mail->isSMTP();                                            
            $mail->CharSet = 'UTF-8';
            $mail->Host       = 'smtp.office365.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'rafaelmacedosilva1234@hotmail.com';    
            $mail->Password   = 'R@fael50';                              
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
            $mail->Port       = 587;   
        
            $mail->setFrom('rafaelmacedosilva1234@hotmail.com','Stockash');
            $mail->addAddress('rafaelmacedosilva88@hotmail.com','Contato');             
        
            $mail->isHTML(true);                                  
            $mail->Subject = 'Você acabou de receber um e-mail';
            $mail->Body    = "{$message}";
            $mail->AltBody = "Nome: {$nome} - E-mail: {$email} - Telefone: {$telefone} - Investimento: {$emp_invest} -";
    
            $mail->send();
        }catch (Exception $e) {
            echo "Não foi possível enviar a sua mensagem, tente novamente.";
        }
    }

    public static function templateHTML($nome,$email,$telefone,$emp_invest,$mensagem,$status)
    {
        $message = "
            <html> 
                <body style='background-color: #F4F4F4; padding: 32px;'>
                    <div style='max-width: 480px; margin: 0 auto; padding: 24px; background: #fff; border-radius: 8px; text-align: center;'>
                        <img src='https://webdevstrael.000webhostapp.com/assets/brand/brand.png' />
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
            </html>";

        return $message;
    }
}