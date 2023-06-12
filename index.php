<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1241fb6252.js" crossorigin="anonymous"></script>
    <title>Léa Dubois</title>
</head>

<body>

    <div class="page1">

        <header>

            <img src="images/logo.png" class="logo" alt="">

            <label for="toggle">&#9776</label>
            <input type="checkbox" id="toggle">

            <nav>
                <ul>
                    <li><a href="#presentation">A PROPOS</a></li>
                    <li><a href="#portfolio">PORTFOLIO</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                </ul>
            </nav>
        </header>

        <div class="hero">

            <div class="hero-text-container">
                <h1>BONJOUR JE SUIS <a href="https://www.linkedin.com/in/l%C3%A9a-dubois-381a6a244/">L&#201A DUBOIS</a></h1>
                <p>D&#201VELOPPEUSE LOGICIEL EN RECHERCHE D'ALTERNANCE</p>
            </div>

        </div>

    </div>

    <section class="presentation" id="presentation">
        <div class="presentation-text-container">
            <h2>PRESENTATION</h2>
            <p>Actuellement en formation en développement web et souhaitant poursuive en développement logiciel, j'aime relever des défis et résoudre des problèmes.<br>
                Dans le futur, j'aimerais developper mes propres jeux vidéos.</p>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <h2>PORTFOLIO</h2>
        <div class="card-grid">

            <a class="card" id="revisions" href="#revisions1">
                <div class="card__background card13"></div>

                <div class="card__content">
                    <p class="card__category">MAI 2023</p>
                    <h3 class="card__heading">Révisions super week</h3>
                </div>
            </a>

            <a class="card" id="boutique" href="#boutique1">
                <div class="card__background card12"></div>

                <div class="card__content">
                    <p class="card__category">AVRIL 2023</p>
                    <h3 class="card__heading">Boutique en ligne</h3>
                </div>
            </a>

            <!--<a class="autocompletion" id="autocompletion" href="#autocompletion1">
                    <div class="card__background card11"></div>
                    
                    <div class="card__content">
                        <p class="card__category">MARS 2023</p>
                        <h3 class="card__heading">Autocompletion</h3>
                    </div>
                </a>-->

            <a class="card" id="clicker" href="#clicker1">
                <div class="card__background card10"></div>

                <div class="card__content">
                    <p class="card__category">FEVRIER 2023</p>
                    <h3 class="card__heading">Clicker</h3>
                </div>
            </a>

            <a class="card" id="todolist" href="#todolist1">
                <div class="card__background card9"></div>

                <div class="card__content">
                    <p class="card__category">FEVRIER 2023</p>
                    <h3 class="card__heading">ToDoList</h3>
                </div>
            </a>

            <!-- <a class="card" id="memory" href="#memory1">
                    <div class="card__background card8"></div>
                    
                    <div class="card__content">
                        <p class="card__category">JAVIER 2023</p>
                        <h3 class="card__heading">Memory</h3>
                    </div>
                </a> -->

            <a class="card" id="CMS" href="#cms1">
                <div class="card__background card7"></div>

                <div class="card__content">
                    <p class="card__category">DECEMBRE 2022</p>
                    <h3 class="card__heading">My CMS</h3>
                </div>
            </a>

            <a class="card" id="salles" href="#salles1">
                <div class="card__background card6"></div>

                <div class="card__content">
                    <p class="card__category">DECEMBRE 2022</p>
                    <h3 class="card__heading">Réservation de salles</h3>
                </div>
            </a>

            <a class="card" id="livre" href="#livre1">
                <div class="card__background card5"></div>

                <div class="card__content">
                    <p class="card__category">DECEMBRE 2022</p>
                    <h3 class="card__heading">Livre d'or</h3>
                </div>
            </a>

            <a class="card" id="connexion" href="#connexion1">
                <div class="card__background card4"></div>

                <div class="card__content">
                    <p class="card__category">DECEMBRE 2022</p>
                    <h3 class="card__heading">Module de connexion</h3>
                </div>
            </a>

            <a class="card" id="voyages" href="#voyages1">
                <div class="card__background card3"></div>

                <div class="card__content">
                    <p class="card__category">NOVEMBRE 2022</p>
                    <h3 class="card__heading">Voyages</h3>
                </div>
            </a>

            <a class="card" id="app" href="#app1">
                <div class="card__background card2"></div>

                <div class="card__content">
                    <p class="card__category">NOVEMBRE 2022</p>
                    <h3 class="card__heading">App favorites</h3>
                </div>
            </a>

            <a class="card" id="plateforme" href="#plateforme1">
                <div class="card__background card1"></div>

                <div class="card__content">
                    <p class="card__category">OCTOBRE 2022</p>
                    <h3 class="card__heading">site La Plateforme</h3>
                </div>
            </a>

        </div>
    </section>

    <div id="revisions1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">REVISIONS SUPER WEEK</h3>
                <p>Languages utilisés : HTML, CSS, PHP, PDO, JavaScript, SQL</p><br><br>
                <p class="para_modal">Semaine de révisions sur les routeurs</p>

                <div class="modal_liens">
                    <a href="super-week" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/super-week" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="boutique1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">BOUTIQUE EN LIGNE</h3>
                <p>Languages utilisés : HTML, CSS, PHP, PDO, JavaScript, SQL</p><br><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Page d’accueil attractive avec plusieurs sections dont une mise en avant des produits phares sur la page d’accueil / derniers produits mis en ligne;</li>
                    <li>Barre de recherche de produits avec une autocomplétion en javascript asynchrone;</li>
                    <li>Le site doit être responsive;</li>
                    <li>Accès à la boutique présentant tous les produits avec la possibilité de les filtrer par catégorie / sous-catégories sans rechargement de page;</li>
                    <li>Au clic sur chaque produit : une page “détail” complète générée dynamiquement;</li>
                    <li>Un système de création de comptes d’utilisateurs;</li>
                    <li>Espace tableau de bord Administrateur;</li>
                    <li>Système de validation du panier.</li>
                </ul>

                <div class="modal_liens">
                    <a href="boutique-en-ligne" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/corentin-roussel/boutique-en-ligne" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="autocompletion1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">AUTOCOMPLETION</h3>
                <p>Languages utilisés : HTML, PHP, PDO, JavaScript</p><br><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Une page d’accueil;</li>
                    <li>Une page de résultats de recherche;</li>
                    <li>Une page présentant un élément;</li>
                    <li>Le header de vos pages doit contenir une barre de recherche. Cette barre de recherche suggère des résultats liés au fur et à mesure que l’utilisateur écrit.</li>
                </ul>

                <div class="modal_liens">
                    <a href="autocompletion" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/autocompletion" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="clicker1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">CLICKER</h3>
                <p>Languages utilisés : HTML, CSS, PHP, PDO, JavaScript</p><br><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Définir un univers;</li>
                    <li>Lorsqu'un utilisateur clic, il gagne des points;</li>
                    <li>Il doit y avoir une boutique. Elle permet de dépenser des points pour acheter des éléments et des bonus. Les éléments permettent de produire davantage de points, de façon manuelle (clic) ou automatique (idle). Les bonus quant eux améliorent ces éléments;</li>
                    <li>Les éléments et bonus doivent coûter de plus en plus cher et produire de plus en plus de points ou améliorer les éléments déjà existants;</li>
                    <li>Il ne faut pas qu’en cas de coupure l’utilisateur perde son avancée.</li>
                </ul>

                <div class="modal_liens">
                    <a href="clicker" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/clicker" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="todolist1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">TO DO LIST</h3>
                <p>Languages utilisés : HTML, CSS, PHP, PDO, JavaScript</p><br><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Une liste de tâches à faire accompagnée de leur date de création. Il doit être possible, avec un bouton ou autre, de spécifier qu’une tâche a été accomplie ou annulée. Cette tâche doit être retirée de la liste;</li>
                    <li>Pouvoir montrer que l'on est le meilleur ! Donc rajouter un classement des 10 meilleurs joueurs;</li>
                    <li>Un input permettant de créer une tâche;</li>
                    <li>Un bouton de déconnexion permettant de... se déconnecter;</li>
                    <li>A l’exception du bouton de déconnexion, aucune des actions possibles sur la page “todolist.php” ne doit entraîner un rechargement de la page.</li>
                </ul>

                <div class="modal_liens">
                    <a href="tdl" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/tdl" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="memory1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">MEMORY</h3>
                <p>Languages utilisés : HTML, CSS, PHP, PDO</p><br><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Pouvoir choisir le nombre de paires qui seront tirées au sort aléatoirement. Au minimum 3 paires différentes (6 cartes) au maximum 12 paires;</li>
                    <li>Pouvoir montrer que l'on est le meilleur ! Donc rajouter un classement des 10 meilleurs joueurs;</li>
                    <li>Des profils individuels en plus qui permettront aux joueurs de voir leur progression individuelle et leurs meilleurs scores;</li>
                    <li>Utiliser les classes pour réaliser ce projet. Le minimum est une classe nommée Card.php, que vous utiliserez pour vos différentes cartes du jeu.</li>
                </ul>

                <div class="modal_liens">
                    <a href="memory" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/memory" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="cms1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">MY CMS</h3>
                <p>Outil utilisé : WordPress, Woocommerce</p><br><br>
                <p>Consignes :</p><br>
                <p>Vous créez une entreprise spécialisée dans le conseil et la vente de produits et vous souhaitez mettre en ligne un site internet.
                    Vous avez fait le choix d'utiliser le CMS Wordpress. Vous avez donc pour mission d'installer Wordpress et de personnaliser le tout à votre image.
                </p><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Une page d'accueil : elle doit mettre en avant votre entreprise, votre activité et vos produits phares;</li>
                    <li>Une page “à propos de nous” qui présente votre entreprise et son histoire;</li>
                    <li>Une page Boutique avec tous les produits à vendre de votre site et qui contiendra des catégories de produits et une page détail spécifique pour chaque produit;</li>
                    <li>Une page contact doit également permettre aux visiteurs de contacter l'entreprise.</li>
                </ul>

                <div class="modal_liens">
                    <a href="https://lea-dubois.students-laplateforme.io/mycms/wordpress/" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/moncms" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="salles1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">R&#201;SERVATION DE SALLES</h3>
                <p>Languages utilisés : HTML, CSS, PHP, MySQLI</p><br><br>
                <p>Consignes :</p><br>
                <p>Vous décidez de créer un site permettant à vos utilisateurs de réserver une salle pour un événement ou autre.</p><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Une page d'accueil qui présente votre site;</li>
                    <li>Une page contenant un formulaire d'inscription ;</li>
                    <li>Une page contenant un formulaire de connexion;</li>
                    <li>Une page permettant de modifier son profil;</li>
                    <li>Une page permettant de voir le planning de la salle;</li>
                    <li>Une page permettant de voir une réservation;</li>
                    <li>Un formulaire de réservation de salle.</li>
                </ul>

                <div class="modal_liens">
                    <a href="reservation-salles" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/reservation-salles" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="livre1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">LIVRE D'OR</h3>
                <p>Languages utilisés : HTML, CSS, PHP, MySQLI</p><br><br>
                <p>Consignes :</p><br>
                <p>Vous décidez de créer un livre d'or permettant à vos utilisateurs de laisser leurs avis sur votre site.</p><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Une page d'accueil qui présente votre site;</li>
                    <li>Une page contenant un formulaire d'inscription. Dès qu'un utilisateur remplit ce formulaire, les données sont insérées dans la base de données et l'utilisateur est redirigé vers la page de connexion;</li>
                    <li>Une page contenant un formulaire de connexion;</li>
                    <li>Une page permettant de modifier son profil;</li>
                    <li>Une page permettant de voir le livre d'or. Sur cette page on voit l'ensemble des commentaires, organisés du plus récent au plus ancien. Si l'utilisateur est connecté, sur cette page figure également un lien vers la page d'ajout de commentaire;</li>
                    <li>Un formulaire d'ajout de commentaire. Il n'est accessible qu'aux utilisateurs connectés. Chaque utilisateur peut poster plusieurs commentaires.</li>
                </ul>

                <div class="modal_liens">
                    <a href="livre-or" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/module-connection" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="connexion1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">MODULE DE CONNEXION</h3>
                <p>Languages utilisés : HTML, CSS, PHP, MySQLI, SQL</p><br><br>
                <p>Consignes :</p><br>
                <p>Vous décidez de créer un module de connexion permettant aux utilisateurs de créer leur compte, de se connecter et de modifier leurs informations.</p><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Une page d'accueil qui présente votre site;</li>
                    <li>Une page contenant un formulaire d'inscription ;</li>
                    <li>Une page contenant un formulaire de connexion;</li>
                    <li>Une page permettant de modifier son profil;</li>
                    <li>Une page d'administration, accessible UNIQUEMENT pour l'utilisateur “admin”. Elle permet de lister l'ensemble des informations des utilisateurs présents dans la base de données.</li>
                </ul>

                <div class="modal_liens">
                    <a href="module-connexion" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/module-connection" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="voyages1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">VOYAGES</h3>
                <p>Languages utilisés : HTML, CSS</p><br><br>
                <p>Consignes :</p><br>
                <p>Vous êtes passionnés de voyages. Vous décidez, avec votre groupe, de développer un site qui présente votre équipe et l'ensemble des pays / villes que vous avez ou rêvez de visiter.</p><br>
                <p class="para_modal">Il faut :</p>

                <ul>
                    <li>Il doit y avoir une page d'accueil nommée “index.html”, puis une page par personne à l'image du pays choisi nommée avec le nom du pays;</li>
                    <li>L'ensemble des pages doit être accessible depuis une barre de navigation avec deux listes déroulantes : accès aux pages pays via un sous-menu par continent et accès aux pages pays via un sous-menu par personne;</li>
                    <li>Un fichier voyages.css sera créé pour styliser tous les éléments communs à l'ensemble du site.</li>
                </ul>

                <div class="modal_liens">
                    <a href="voyages" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/fabien-ricca/voyages" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="app1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">APP FAVORITES</h3>
                <p>Languages utilisés : HTML, CSS</p><br><br>
                <p>Consignes :</p><br>
                <p>Développez un site web qui présente / vend au moins 3 de vos applications mobiles favorites.<br><br>
                    Il doit y avoir une page de présentation générale ainsi qu'une page pour chacune des applications. Chacune de ces pages doit avoir son propre style, à l'image
                    de l'application. Il doit y avoir des logos, des descriptions, des slogans, des impressions d'écran, des liens de téléchargement, des liens vers les réseaux sociaux...
                </p>

                <div class="modal_liens">
                    <a href="app-favorites" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/app-favorites" target="_blank">Lien vers le GitHub</a>
                </div>

            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <div id="plateforme1" class="modal">
        <div class="modal_content">

            <div class="texte_modal">

                <h3 class="titre_modal">SITE DE LA PLATEFORME</h3>
                <p>Languages utilisés : HTML, CSS (flexbox)</p><br><br>
                <p>Consignes :</p><br>
                <p>Grâce à vos compétences fraîchement acquises refaire la page d'acceuil du site de La Plateforme en incluant des images, des textes, des vidéos...</p>

                <div class="modal_liens">
                    <a href="site-la-plateforme" target="_blank">Lien vers le site</a>
                    <a href="https://github.com/lea-dubois1/site-la-plateforme" target="_blank">Lien vers le GitHub</a>

                </div>
            </div>

            <a href="#" id="modal_close">&times;</a>

        </div>
    </div>

    <section class="contact" id="contact">
        <!-- <div class="liens-contact"> -->
        <div class="icons">
            <a href="https://github.com/lea-dubois1"><i class="fa-brands fa-github oneIcon"></i></a>
            <a href="https://www.linkedin.com/in/l%C3%A9a-dubois-381a6a244/"><i class="fa-brands fa-linkedin oneIcon"></i></a>
        </div>
        <a href="mailto:lea.dubois@laplateforme.io">Envoyez-moi un mail</a>
        <a href="images/CV_lea_dubois.pdf" download="CV_lea_dubois">Téléchargez mon CV</a>
        <a href="admin.php">Panel admin</a>
        <!-- </div> -->
    </section>

</body>

</html>