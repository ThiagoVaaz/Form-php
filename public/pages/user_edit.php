<?= get('message'); ?>

<?php
    $user = find('users', 'id', $_GET['id']);

?>


<h2>Cadastro</h2>
<hr>
<form action="/pages/forms/user_update.php" method="POST" role="form">  
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com" value="<?= $user->email; ?>">
    </div>
    <br>

    <input type="hidden" name="id" value="<?= $user->id; ?>">

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $user->name; ?>">
    </div>
    <br>
    <div class="form-group">
        <label for="lastname">Lastname:</label>
        <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?= $user->lastname; ?>">
    </div>
    <br>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" name="password" placeholder="**********" value="<?= $user->password; ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>