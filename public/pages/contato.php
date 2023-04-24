<h2>Contato</h2>
<hr>
<?= get('message') ?>

<form action="/pages/forms/contato.php" method="POST" role="form">  
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
        <label for="subject">Subject:</label>
        <input type="text" class="form-control" name="subject" placeholder="Subject">
    </div>
    <br>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" name="message" rows="3" placeholder="Write your message"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>