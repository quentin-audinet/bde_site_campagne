<?php

?>
<form action="" method="post">
    <input type="hidden" name="go"/>
    <input type="submit" value="GOO" />
</form>

<form action="" method="post">
    <p>Mot de passe de validation :</p>
    <input type="text" id="answer" name="answer" /><input type="submit" value="Valider">
    <?php if(isset($result)) {print($result);} ?>
</form>