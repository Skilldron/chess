# Principe SOLID

## **S : Single Responsibility Principle (SRP)**

J'ai modifier l'architecture de mon projet, ce qui permet de lancer tout le programme est fait dans un fichier index.php au lieu de grid, ce qui fait plus sens.

Je suis également passé de cette achitecture

<img src="./public/images/ancienne_architecture.png" />

A celle-ci

<img src="./public/images/nouvelle_architecture.png" />

Le code n'a pas bouger car chaque fichier ne contenait déjà que les méthodes lié à la fonction de la classe.
Toutefois j'ai modifier l'architecture comme ci-dessus afin de mieux organiser les fichiers, si à l'avenir d'autre fichier en lien avec la grille de jeu par exemple, devait être créé.

---

## **O : Open/Closed Principle**

Avant chacune des pièces de mon échéquier `extend` la classe `Piece`. Je voulais qe chacune de mes pièces aient une méthode `getPossibleMovement`. Au lieu de créer une interface que j'implémente pour chacune de mes pièces, j'avais créer cette méthode directement dans ma classe `Piece` avec un corps vide. J'ai donc modifier cela.

Désormais chaque pièce (Roi, fou, etc.) implémente l'interface `PossibleMovementInterface` pour avoir accès à la méthode.
J'ai également retirer le bout de code suivant de la classe `Piece` puisqu'il n'est plus utile :

    // Methods
    public function getPossibleMovement($grid){}

Voici à quoi ressemble la classe `Pion` désormais

<img src="./public/images/pion.png" />

---

## **L : Liskov’s Substitution Principle (LSP)**

J'utilise correctement le principe de Liskov notamment avec la méthode `getPossibleMovement` présente sur toutes les classes de mes pièces.

La méthode prend en paramètre (cf: PossibleMovementInterface.php) un `int` qui doit être la taille de la grille. Aucune des classes de mes pièces ne rajoute de paramètre pour correctement fonctionner et elles renvoient tous un tableau.

Ce qui me permet d'avoir les déplacements possible de toutes mes pièces avec une seule méthode qui fonctionne dans tous les cas sans `if` ou `instance of` (comme le préconise le _Single Responsibility Principle_)

<img src="./public/images/displayGrid.png" />

---

## **I : Interface Segregation Principle (ISP)**

En enlevant le bout de code évoqué précédemment (cf: _Open/Closed Principle_) et en le remplaçant par une interface, cela m'a permit de respecter le principe de ségrégation d'interface.

Désormais seul les classes ayant besoin de la méthode l'implémente tandis que précédemment la classes `Piece` disposait aussi de cette méthode qui lui était inutile.

---

## **D : Dependency Inversion Principle (DIP)**

Encore une fois, grace à l'interface `PossibleMovementInterface` que toutes mes classes implémente je suis sûr qu'elles disposent toutes de la méthode `getPossibleMovement`.

Avant, la méthode était présente dans la classe parente `Piece` mais ne faisait rien. Si j'oubliais d'écrire la méthode dans la classe `Pion` par exemple il est possible que le code ne bug pas mais ne fonctionne pas comme voulu et si c'est un gros projet cela peut-être dur à débug.
Alors qu'avec l'interface le code va directement me donner un message d'erreur et je pourrais facilement en déduire que j'ai oublié d'implémenter l'interface.
