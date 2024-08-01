<h1 class="title">LOG IN</h1>

<div style="display: ruby-text; padding:5rem;">
    <form action="" method="POST">

        <p>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom">
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
        </p>

        <input type="hidden" name="hidden" value="<?php echo date('d/m/Y H:i:s'); ?>">
        <input type="submit" name="submit" value="Envoyer">
    </form>

</div>