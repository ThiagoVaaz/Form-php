<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

if (isEmpty()) {
    flash('message', 'Preencha todos os campos', 'danger');
    
    redirect("user_edit&id" . $id);
}

$validate = validate([
    'email' => 'e',
    'name' => 's',
    'lastname' => 's',
    'password' => 's'

]); 

$atualizado = update('users', $validate, ['id', $id]);

 if($atualizado) {
    //flash('message', 'Atualizado com sucesso', 'success');

    return redirect('home');
}
flash('message', 'Opa, deu ruim');

return redirect("user_edit&id" . $id);