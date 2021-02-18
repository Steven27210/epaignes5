<?php
require('inc/fonction.php');
// if formulaire soumis
$errors = array();
$success = false;
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $nom     = cleanXss('nom');
    $prenom  = cleanXss('prenom');
    $message = cleanXss('message');
    $email   = cleanXss('email');
    $url     = cleanXss('url');
    $fruit     = cleanXss('fruits');
    // validation
    $errors = validText($errors,$nom,'nom');
    $errors = validText($errors,$prenom,'prenom',4,60);
    $errors = validText($errors,$message,'message',4,60);
    $errors = validEmail($errors,$email,'email');
    $errors = validUrl($errors,$url,'url');
    if(empty($fruit)) {
        $errors['fruits'] = 'Veuillez renseigner un fruit';
    }
    // si no errors
    if(count($errors) == 0) {
        $success = true;
        // insertion en base
        // envoie d'un email
        // redirection
    }
}
debug($_POST);
debug($errors);

include('inc/header.php'); ?>

<?php if($success == true) {
    echo '<p>Bravo merci pour votre message</p>';
} else { ?>
    <form action="index.php" method="POST" class="wrap" novalidate>
        <label for="nom">Nom *</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
        <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>

        <label for="message">Message</label>
        <textarea name="message" id="message"><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea>
        <span class="error"><?php if(!empty($errors['message'])) {echo $errors['message']; } ?></span>

        <label for="email">E-mail</label>
        <input type="text" id="email" name="email" value="<?php if(!empty($_POST['email'])) { echo $_POST['email']; } ?>">
        <span class="error"><?php if(!empty($errors['email'])) {echo $errors['email']; } ?></span>

        <label for="url">Site Web</label>
        <input type="text" id="url" name="url" value="<?php if(!empty($_POST['url'])) { echo $_POST['url']; } ?>">
        <span class="error"><?php if(!empty($errors['url'])) {echo $errors['url']; } ?></span>
        <?php
            $allfruits = array(
                'kiwi'   => 'Kiwi',
                'orange' => 'Orange',
                'papaye' => 'papaye'
            );
        ?>
        <label for="fruits">Fruits</label>
        <select name="fruits" id="fruits">
            <option value="">---------------------</option>
            <?php foreach ($allfruits as $key => $value) {
                $selected = '';
                if(!empty($_POST['fruits'])) {
                    if($_POST['fruits'] == $key) {
                        $selected = ' selected="selected"';
                    }
                }
                ?>
                <option value="<?php echo $key; ?>"<?php echo $selected; ?>><?php echo $value; ?></option>
            <?php } ?>
        </select>
        <span class="error"><?php if(!empty($errors['fruits'])) {echo $errors['fruits']; } ?></span>

        <input type="submit" name="submitted" value="Envoyer">
    </form>
<?php } ?>
<?php include('inc/footer.php');