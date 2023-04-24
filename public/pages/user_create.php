<?= get('message'); ?>

<h2>Cadastro</h2>
<hr>


<form action="/pages/forms/user_create.php" method="POST" role="form">  
    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
    </div>
    <br>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Name">
    </div>
    <br>
    <div class="form-group">
        <label for="lastname">Lastname:</label>
        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
    </div>
    <br>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" name="password" placeholder="**********">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>