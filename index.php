<?php
echo "Quel âge as-tu ?\n";
$age = trim(fgets(STDIN)); // le programme ATTEND que l'utilisateur tape au clavier (lecture du fichier stdin)
if($age >= 18){
    echo "Je suis majeur\n";
}
else{
    echo "Je suis mineur\n";
}