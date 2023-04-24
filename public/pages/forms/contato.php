<?php

require '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'Preencha todos os campos', 'danger');
    
    return redirect("contato");
};

$validate = validate([
    'email' => 'e',
    'name' => 's',
    'subject' => 's',
    'message' => 's'

]); 


$data = [
    'quem' => $validate->email,
    'para' => '*****@****.com',
    'assunto' => $validate->subject,
    'mensagem' => $validate->message
];


if (send($data)) {
    flash('message', 'Enviado', 'success');
    return redirect("contato");
} else {
    flash('message', 'Opa, deu ruim', 'danger');
    
    return redirect("contato");
};