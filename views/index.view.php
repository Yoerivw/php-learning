<?php require('partials/head.php');?>

<!-- Lists the names of all users upon page load: -->

<?php 
    foreach($users as $user) : ?>

        <li><?= $user->name; ?></li>
<?php endforeach;?>



    <h1>Submit your name</h1>

    <form method="POST" action="names">

        <input name="name"></input>
        

        <button type="submit">Sumbit</button>
        

    </form>


    
<?php require('partials/footer.php');?>