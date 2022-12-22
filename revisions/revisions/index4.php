<?php 

QUESTION 1/

Soit le code php suivant:
    if(array_key_exists('admin',$_GET)){
         echo $_GET['admin'];
    }
    else{
        echo 'Erreur';
    }
    
Qu affiche le code si la page est appelée comme ceci : index.php?admin=toto

- admin
- toto //<-
- $_GET
- Erreur


QUESTION 2/

Que contient un fichier phtml selon les bonnes pratiques ?

- du php //<-
- du js
- des requêtes SQL
- du html //<-
- du css

QUESTION 3/

Soit le code js suivant:

function setColor($color){
    
    if($color=='blue'){
        return $color;
    }
    else if($color=='red'){
        return 'blue';
    }
    else{
        return 'grey';
    }
}

Que renvoie cette fonction si on l appelle ainsi : setColor('red') ?

- blue //<-
- red
- rien
- grey


QUESTION 4/

Parmi ces affirmations , lesquelles sont vraies ???

- Un model ne contient que du code qui accède aux données //<-
- Le routeur est le fichier index.php dans le dossier controllers
- Un controlleur vérifie que les données reçues sont correctes //<-
- Un template sert à traiter les données en entrée et à les afficher
- Le code css est dans le dossier controllers
- Aucune


QUESTION 5/

Sur une page Web, où puis-je placer mon lien vers le script ?

- dans la balise head 
- avant la fermeture de la balise body //<-
- dans la balise title
- n importe où entre <body> et </body>
- n importe où


QUESTION 6/

Comment lier 2 tables en SQL ?

- créer une clé primaire sur la première table et une secondaire sur la deuxième , faire une //<-
liaison enter les deux (contrainte d intégrité référentielle)

- Créer un champ avec le même nom dans les 2 tables, elles seront ainsi liées

- Créer une clé primaire sur chaque table et les lier entre elles par une contrainte d intégrité 
référentielle





