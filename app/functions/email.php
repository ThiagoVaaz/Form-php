<?php


function send(array $data){

    $email = new PHPMailer\PHPMailer\PHPMailer;      


            //Server settings
            $email->CharSet    = 'UTF-8';
            $email->SMTPDebug  = 0;                    
            $email->isSMTP(); //Send using SMTPe
            $email->Host       = 'sandbox.smtp.mailtrap.io';//Set the SMTP server to send through
            $email->SMTPAuth   = true;  //Enable SMTP authentication
            $email->Username   = '**************';//SMTP username
            $email->Password   = '**************'; //SMTP password
            $email->SMTPSecure = 'plain';//Enable implicit TLS encryption
            $email->Port       = 2525;//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $email->setFrom('*****@****.com');
            $email->FromName = $data['quem'];
            $email->addAddress($data['para']);                  

            //Attachments
    //     $email->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //     $email->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $email->isHTML(true);                                  //Set email format to HTML
            $email->Subject = $data['assunto'];
            $email->Body    = $data['mensagem'];
            $email->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $email->msgHTML($data['mensagem']);

            return $email->send();
        
}


?>     