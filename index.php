<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <meta  charset = "UTF-8" />
        <title>Home - Guillaume L.</title>
        <link rel = "stylesheet" href="style/stylecom.css">
        <link rel = "stylesheet" href="style/styleindex.css">
        <link rel = "icon" href = "images/icon.png">
        <script type = "text/javascript" src = "javascript/test.js"></script>
    </head>
    <body>
        <header>
            <a href = "index.php">Home</a>
            <ul>
                <li>
                    <img src = "images/c++.png" alt = "C++">
                    <ul class = "first">
                        <li><a href = "suite/ascii_image.php">Ascii Image</a></li>
                    </ul>
                </li>
                <li>
                    <img src = "images/c.png" alt = "C">
                    <ul class = "first">
                    </ul>
                </li>
                <li>
                    <img src = "images/python.png" alt = "Python">
                    <ul class = "first">
                        <li><a href = "suite/sokoban.php">Sokoban</a></li>
                    </ul>
                </li>
                <li>
                    <img src = "images/html.png" alt = "HTML">
                    <ul class = "first">
                        <li><a href = "#">Site Marvel</a></li>
                    </ul>
                </li>
            </ul>
        </header>
        <img src = "images/cliché.jpg" alt = "fond" id = "fond">
        <div id = "up">
            <h1 id = "name">Guillaume LEMONNIER</h1>
            <h3>Etudient Informatique</h3>
            <img src = "images/icon.png" alt = "Ma tronche" id = "face">
        </div>
        <nav>
            <a href = "#historique">Historique</a>
            <a href = "#etude">Etude</a>
        </nav>
        <main>
            <h2 id = "historique">Avant les études</h2>
            <section>
                <article>
                    <h3>Découverte de la programmation</h3>
                    <p>
                        bla
                   </p>
                </article>
                <article>
                    <h3>Debut de la programmation en solo</h3>
                    <p>
                        J'ai commencé à codé en apprenend le langage C et C++ sur le site de <a href = "https://openclassrooms.com/fr/" target = blank>OpenClassrooms</a>.
                        En parallèle de la lecture des cours sur ce site je faisais quelques programme de mon côté afin de tester si j'avais bien compris le cours.
                        J'ai ainsi créer mon premier code "complexe" en solitaire, lors de mon année de L1, en C++.
                        Celui-ci s'appelle Ascii Image et sert à transformé une image quelconque en Image ascii.
                    </p>
                </article>
            </section>
            <hr>
            <h2 id = "etude">Etudes</h2>
            <section>
                <article>
                    <h3>License 1 Université de Caen</h3>
                    <p>
                        bla
                    </p>
                </article>
            </section>
        </main>
        <footer>
            <a href = "#up">Haut de page</a>
            <ul>
                <li><a href = "#" target = blank>CGU</a></li>
                <li><a href = "suite/contact.php">Contact</a></li>
                <li><a href = "#">Docs de la page</a></li>
            </ul>
        </footer>
        <script>
            let imageCPP = document.querySelectorAll("img");
            test(imageCPP);
        </script>
    </body>
</html>