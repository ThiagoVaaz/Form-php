<?php

require '../../../bootstrap.php';

if (isEmpty()) {
    flash('message', 'Preencha todos os campos', 'danger');
    
    return redirect("user_create");
}

$validate = validate([
    'email' => 'e',
    'name' => 's',
    'lastname' => 's',
    'password' => 's'

]); 

$cadastrado = create('users', $validate);

 if($cadastrado) {
    flash('message', 'Cadastrado com sucesso', 'success');

    return redirect('user_create');
}
    flash('message', 'Opa, deu ruim');

    redirect('user_create');