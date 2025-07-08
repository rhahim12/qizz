<?php
echo "Qui veut gagner des millions ?\n";

$questions = [
     "Quelle est la couleur du cheval blanc d'Henri IV?\n1.Blanc\n2.Rouge\n3.Noir\n",
    "Date de la prise de la Bastille ?\n1.1750\n2.1789\n3.1800\n",
    "Quel est le plus grand océan du monde ?\n1.Océan Atlantique\n2.Océan Indien\n3.Océan Pacifique\n",
    "Qui a écrit Les Misérables ?\n1.Victor Hugo\n2.Emile Zola\n3.Marcel Proust\n",
    "Quelle est la capitale de l'Australie ?\n1.Sydney\n2.Melbourne\n3.Canberra\n",
    
];


$reponses =[ 1, 2, 3, 1, 3,];
$score = 0; // declaration d'un int nommé
$NB_QUESTIONS = count($questions); // comptage du tableau question est égal a

for($i = 0; $i < $NB_QUESTIONS; $i++){ // la boucle for va se répéter et parcourir le tableau avec une fin
    echo $questions[$i]."\n";// chaque valeur dans le tableau question va être posés jusqu'a la dernière
    // Votre code
    $utilisateur = trim(fgets(STDIN)); // $a est égal à la donnée du clavier
    echo"Suspense !!\n"; // dire suspense 
    if ($utilisateur == $reponses[$i]){  // si $a est égal à la valeur dans le tableau reponse 
        echo" C'est une bonne réponse\n";
        echo "Le score est de ". $score += 10 ."\n";// dire le score... et ajouté 10
    

 }
 else{ // sinon
    echo "C'est une mauvaise réponse\n";
    echo "Le score est de ". $score ."\n";

 }
 echo " Game over\n";
echo "Pourcentage de bonne réponse : " .( $score / $NB_QUESTIONS)* 10 . "%\n"; 
echo "Bien jouer tu as gagner des millions !!!!!\n";

}
 