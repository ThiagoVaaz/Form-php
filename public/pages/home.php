<h2>Home</h2>
<hr>

<table class= "table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>

    <?php 
    $users = all('users');
    foreach ($users as $user):
    ?>

        <tr>
            <td><?=$user->id?></td>
            <td><?=$user->name . " " . $user->lastname?></td>
            <td><?=$user->email?></td>
            <td>
                <a class="link editar" href="?page=user_edit&id=<?=$user->id?>">Editar</a>
            </td>
            <td>
                <a class="link deletar" href="?page=user_delete&id=<?=$user->id?>">DELETAR</a>
            </td>
        </tr>

    <?php endforeach; ?>
    
    </tbody>
</table>
