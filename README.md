# TP-COMBAT-POO

TP Combat POO

Résumé
1. Vous allez utiliser les connaissances acquises sur PDO pour gérer une base de données
de personnages de jeu.
2. Vous allez créer des classes PHP qui ont des rôles bien déterminés et séparés.
3. Vous allez en apprendre un peu plus sur l’intérêt des classes.
4. Vous allez découvrir le principe de l’auto loading.
5. Vous allez découvrir le principe de l’hydratation et l’imbrication de la PDO avec les
classes.
6. Vous allez utiliser les principes fondamentaux de la POO : l’encapsulation, l’héritage, le
polymorphisme.

2

Instructions
Nous allons découper ce TP en 2 sprints, Une correction sera faite entre les 2.
Pour réaliser ce TP, vous travaillerez par équipe de deux ou trois.
Vous devrez soigner l&#39;apparence de l&#39;application ainsi que l&#39;arborescence du projet.
Vous devrez élaborer une base de données en lien avec les différentes fonctionnalités.
Au fur et à mesure de la progression, de nouvelles itérations du projet s&#39;ajouteront, vous
devez préparer votre code à la maintenabilité et la scalabilité (mise à l&#39;échelle) en découpant
vos fonctionnalités le plus possible dans vos objets.

Objectifs sprint 1 :
● Nous allons créer un jeu de combat en tour par tour.
● Chaque visiteur pourra créer un personnage (pas de mot de passe requis pour
faire simple).
● L&#39;utilisateur (visiteur connecté) pourra alors choisir un personnage avec lequel se
battre.
● L’utilisateur pourra lancer un nouveau combat qui rejoindra la liste des combats
disponibles
● L’utilisateur pourra consulter la liste des combats et en rejoindre un.
● L’utilisateur en combat peut, à tour de rôle, attaquer son adversaire pour lui
infliger des dégâts.
● Lorsqu’un joueur n&#39;a plus de points de vie, le combat est terminé.

3

Le projet devra comporter 8 fichiers PHP :
● config/autoload.php : permettant le chargement automatique des classes
● config/db.php : permettant la connexion à la bdd (Une instance de PDO devra
être créée)
● classes/Personnage.php : définit la classe Personnage possédant :
○ 2 propriétés :
■ son nom (unique).
■ ses points de vie.
○ 2 méthodes :
■ frapper un autre personnage
■ recevoir des dégâts.

● classes/Combat.php : définit la classe Combat possédant :
○ 2 propriétés :
■ son ID (unique)
■ ses personnages

● classes/PersonnagesManager.php : définit la classe PersonnagesManager qui
stocke les données et comporte ces fonctionnalités :
○ enregistrer un nouveau personnage
○ modifier un personnage
○ supprimer un personnage
○ sélectionner un personnage
○ compter le nombre de personnages
○ récupérer une liste de plusieurs personnages
○ savoir si un personnage existe.
● classes/CombatsManager.php : définit la classe CombatsManager qui stocke les
données et comporte ces fonctionnalités :
○ enregistrer un combat
○ modifier un combat
○ supprimer un combat
○ récupérer la liste de combats
○ …
● index.php : affichant l&#39;interface du mini-jeu de combat

4

○ Le joueur peut créer un personnage
○ Le joueur peut utiliser un personnage existant
● combat.php : utilise les classes instanciées et les méthodes souhaitées sur les
objets. (Une instance de PersonnagesManager devra être créée)

5

Ressources
● class : https://tutowebdesign.com/declaration-class-php.php​
● visibilité : https://tutowebdesign.com/visibilite-classe-php.php​
● héritage : https://tutowebdesign.com/heritage-objet-php.php
Plus largement tout ce cours : https://tutowebdesign.com/poo-php.php​

Objectifs sprint 2 :
● Nous allons améliorer la qualité de notre code :
○ Le code rendu devra respecter les normes PHP PSR-1 et PSR-2 :
■ ​https://www.php-fig.org/psr/psr-1/​
■ https://www.php-fig.org/psr/psr-2/​
○ Le code doit être découpé et refactorisé pour le rendre scalable et
maintenable.

● Nous allons ajouter de nouvelles fonctionnalités :
○ L’utilisateur pourra choisir entre différentes classes à la création de son
personnage : guerrier, mage ou archer
○ Les intéractions entre classes sont définies de la sorte :
■ Un guerrier reçoit 2x plus de dégâts lorsque attaqué par un archer
■ Un archer reçoit 2x plus de dégâts lorsque attaqué par un mage
■ Un mage reçoit 2x plus de dégâts lorsque attaqué par un guerrier

6
○ Chaque classe implémente une attaque spéciale propre en plus de
l’attaque classique commune à toutes les classes.
○ Les personnages ont désormais un niveau d’énergie, et chaque action en
consomme. L’énergie est en partie récupérée à chaque tour
automatiquement.

● BONUS
○ Les attaques spéciales de chaque classe peuvent avoir différents effets en
plus d’infliger des dégâts : gel, poison, affaiblissement…
○ Plus d’attaques, avec différents effets et coûts en énergie
