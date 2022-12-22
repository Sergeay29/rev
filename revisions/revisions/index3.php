<?php
Mettez une flèche devant la ou les bonnes réponses:


QUESTION 1:

Soit le code:

$query=$bdd->prepare("INSERT INTO Clients(nom,prenom) VALUES ($nom,$prenom)");
$query->execute();

Quelle type d attaque risque t on avec ce code ?

    - Faille XSS
    - Faille Include
    - Injection SQL //<-
    
QUESTION 2:

A quoi sert la fonction sessionStorage.setItem('donnees',test); ?

    -A enregistrer des données dans une session nommée Test
    -A enregistrer des données dans le navigateur sous l etiquette donnees
    -A enregistrer des données à durée indéterminée sous le nom donnees//<-
    -A enregistrer des données à durée limitée sous le nom donnees
    
QUESTION 3:

Soit le tableau suivant :
$tableau=[1,2,3,4,5];

Quelle est la bonne syntaxe pour que echo $total affiche 15:

- for(var i=0;i<$tableau.length;i++){
    total+=tableau[i];
    }
    
- for($i=0;$i<=count($tableau);$i++){
    $total+=$tableau[$i];
    echo $total;
    }// bonne reponse
    
- for($i=0;$i<count($tableau);$i++){
    $total+=$tableau[$i];
    echo $total;
    }
    
- for($i=0;$i<count($tableau);$i++){
    $total=$tableau[$i];
    echo $total;
    }
    
QUESTION 4:
    
Soit le tableau suivant :
    $tableau=[couleur=>'vert',taille=>'L',marque=>'levis'];
    
    Que me renvoie la syntaxe suivante : array_search('L',$tableau);
    
- 'L'
- True
- taille //<-
- 'levis'


QUESTION 5:
    
    Quels sont les 2 attributs qui permettent d indiquer la page pointée et le type d envoi à la soumission d un formulaire en PHP ?
    
    - name et action
    - action et method //<-
    - method et post
    - action et id
    
QUESTION 6:
    
    Soit le code suivant : 
        
        <article id="art">
            <div class="green">
                Coucou
            </div>
        </article>
        
    Quels sont les sélecteurs CSS qui cibleront la div:
        
    - div //<-
    - .green //<-
    - #green
    - #art.green
    - #art div //<-
    - div.green
    
QUESTION 7:
    
    En POO quelle sont les affirmations qui sont vraies:
        
    - les mutateurs ou getters sont les même méthodes
    - une instanciation permet de créér une nouvelle classe d objet //<-
    - lorsqu une classe hérite d une autre, elle hérite uniquement des méthodes et propriétés //<-
    précédées de public
    - on peut réaliser autant d instanciations que l on souhaite d une même classe //<-
    - une classe mère ne peut pas être instanciée
    
QUESTION 8:

function onClick(event){
    $this.addClass("green");
}

$('article').on('click',onClick);

Que représente $this ?//

-l article sur lequel on a cliqué
-l élément qui a la classe green
-rien //<-
-la fonction dans laquelle il se trouve


QUESTION 9 :
    
    EN SQL , à quoi sert la fonction d agrégation AVG ?
    
- à faire une somme de plusieurs champs
- à faire une moyenne de plusieurs enregistrements//<-
- à faire une jointure entre 2 tables
- à choisir une valeur parmi plusieurs

QUESTION 10:
    
    Soit la requête Ajax suivante: 
        
       let tableau = ['Pierre','Paul','Jacques'];
       fetch('donnees.php?data='+tableau)
        
    Le fichier donnees.php récupère quelles données ?
    
    - $_POST['data']
    - $_POST['data'] et $_POST['tableau']
    - $data
    - $_GET['tableau']//<-
    - $_GET['data']
    
    