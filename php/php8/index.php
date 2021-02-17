<?php
require('inc/fonction.php');
// if formulaire soumis
$errors = array();
if(!empty($_POST['submitted'])) {
    // Faille XSS
    $nom     = trim(strip_tags($_POST['nom']));
    $prenom  = trim(strip_tags($_POST['prenom']));
    $message = trim(strip_tags($_POST['message']));
    // validation
    // nom , renseigné, min 2, max 50
    if(!empty($nom)) {
        if(mb_strlen($nom) < 2) {
            $errors['nom'] = 'min 2 caractères';
        } elseif(mb_strlen($nom) > 50) {
            $errors['nom'] = 'max 50 caractères';
        }
    } else {
        $errors['nom'] = 'Veuillez renseigner ce champ';
    }
    // validation prenom
    if(!empty($prenom)) {
        if(mb_strlen($prenom) < 4) {
            $errors['prenom'] = 'min 4 caractères';
        } elseif(mb_strlen($prenom) > 60) {
            $errors['prenom'] = 'max 60 caractères';
        }
    } else {
        $errors['prenom'] = 'Veuillez renseigner ce champ';
    }
    // validation message
    if(!empty($message)) {
        if(mb_strlen($message) < 10) {
            $errors['message'] = 'min 10 caractères';
        } elseif(mb_strlen($message) > 500) {
            $errors['message'] = 'max 500 caractères';
        }
    } else {
        $errors['message'] = 'Veuillez renseigner ce champ';
    }

}
debug($_POST);
debug($errors);

include('inc/header.php'); ?>
    <form action="index.php" method="POST" class="wrap">
        <label for="nom">Nom *</label>
        <input type="text" id="nom" name="nom" value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } ?>">
        <span class="error"><?php if(!empty($errors['nom'])) {echo $errors['nom']; } ?></span>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="<?php if(!empty($_POST['prenom'])) { echo $_POST['prenom']; } ?>">
        <span class="error"><?php if(!empty($errors['prenom'])) {echo $errors['prenom']; } ?></span>

        <label for="message">Message</label>
        <textarea name="message" id="message"><?php if(!empty($_POST['message'])) { echo $_POST['message']; } ?></textarea>
        <span class="error"><?php if(!empty($errors['message'])) {echo $errors['message']; } ?></span>

        <input type="submit" name="submitted" value="Envoyer">
    </form>
<?php include('inc/footer.php');