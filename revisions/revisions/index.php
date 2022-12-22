<form action="machin.php" method="post">
    <label for="name">Nom
    <input type="text" name="name">
    <label for="name">Prénom
    <input type="text" name="prenom">
    <label for="name">Mot de passe
    <input type="password" name="password">
    <button>Valider</button>
</form>


Questions:
1)A la soumission du formulaire, dans quelle variable va-t-on récupérer le mot de passe saisi par l'utilisateur ? $_POST['password']


2)Quelle est l'url qui va être chargée à la soumission du formulaire ? machin.php


3)Quelle fonction PHP vais-je utiliser pour contrer la faille XSS ? htmlspecialcars()


4) Sur la page machin.php, comment puis-je vérifier si le formulaire a bien été soumis ? if(!empty($_POST))


5) Quelle fonction PHP va me servir à vérifier qu'il n'y a que des lettres dans mes champs name et prenom ?is_string/is_int/is_float PHP[is_string($machaine)]  JS[mavaraible.isstring()]


6)Si je n'avais pas précisé l'attribut method du formulaire, quelle aurait été la méthode par défaut $_GET


<!--    QUESTION SUIVANTE    -->

document.addEventListener("DOMContentLoaded",function(){

});

1) Comment appelle-t-on cette instruction ?

2) A quoi sert-elle ?




<!--    QUESTION SUIVANTE    -->

En POO, PHP:

<?php

class Card{
    private $couleur;
    private $value;
    
    public function _construct(){
        $this->couleur="trèfle";
        $this->value=11;
    }
    
    public function setCouleur($couleur){
        $this->couleur=$couleur;
    }
    
    public function getCouleur(){
        return $this->couleur;
    }
}

?>

1)Il existe 2 erreurs dans ce code, lesquelles: le tiret du 8 de construct;


2)Une fois le code corrigé, comment nomme -t-on la fonction setCouleur ?


3)Une fois le code corrigé, comment nomme -t-on la fonction getCouleur ?


4)Comment appelle -t- on le fait de mettre les propriétés en private et donc de les protéger du code extérieur ?


5)quelles sont les autres possibilités que private pour déclarer la visibilité d'une propriété ?


6)Si ma classe carte héritait d'une autre classe JeuDeCarte, qu'aurais-je dû rajouter dans ce code ?


7)Et dans ce cas, ma classe Card pourrait-elle aussi hériter d'une autre classe JeuDe32Cartes ?




<!--    QUESTION SUIVANTE    -->

Soit le code JS suivant : 

let tab=[[1,2,3,4,5],['a','b','c'],[0,1,2,3]];


1) quel résultat pour ma variable result si:

result=tab[0][1]*tab[2][0] -> 0                                                                                                                                                                      


result=tab[0][3]+tab[1][1] ->4+b


result=tab[1][4]+tab[2][2]->undf


result=tab[2][2]*tab[2][2]->2*2=4


result=tab[0][4]+tab[2][3] -> 5+3=8


<!--    QUESTION SUIVANTE    -->

<a href="index.php?id=3&prix=36">Accueil</a>

1)comment appelle-t-on les informations qui sont transmises grâce à l'url ?


2)Sur la page index.php, comment récupère-t-on ces données ?

<!--    QUESTION SUIVANTE    -->

1) MVC est l'acronyme de quoi ?

2) Que met-on dans le M ?

3) Que met-on dans le V ?

4) Que met-on dans le C ?

5) Qu'est le routeur ? ET à quoi sert-il ?