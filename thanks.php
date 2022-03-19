<?php
echo "Merci " . $_POST['user_Prenom'] . $_POST['user_Prenom']. " de nous avoir contacté à propos de " . $_POST['pets'] ."<br>";

echo "Un de nos conseiller vous contactera soit à l’adresse" . $_POST['user_email'] . "ou par téléphone au " . $_POST['telNo'] . " dans les plus brefs délais pour traiter votre demande : " . $_POST['user_message'];

