<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <title>Contact</title>
        <?php include("../php/head.php") ?>
        <link rel = "stylesheet" href = "../css/stylcontact.css"/>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script type = "text/javascript" src = "../javascript/send.js"></script>
    </head>
    <body>
        <div id = "haut"></div>
        <header>
            <div>
            <img src = "../images/bx-mail-send.svg" alt = "menu" id = "menu">
                <a href = "../index.php">Home</a>
                <ul>
                    <li>C
                        <ul class = "first">
                            <li><a href = "printf.php">Printf</a></li>
                        </ul>
                    </li>
                    <li>C++
                        <ul class = "first">
                            <li><a href = "ascii_image.php">Ascii Image</a></li>
                            <li><a href = "#">Pi Collide</a></li>
                        </ul>
                    </li>
                    <li>C#
                        <ul class = "first">
                            <li><a href = "#">oioio</a></li>
                        </ul>
                    </li>
                    <li>Python
                        <ul class = "first">
                            <li><a href = "sokoban.php">Sokoban</a></li>
                        </ul>
                    </li>
                    <li>Web
                        <ul class = "first">
                            <li><a href = "#">Site Marvel</a></li>
                            <li><a href = "#">My Website</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <main>
            <input type = "text" id = "name" placeholder = "Nom / Prenom / Entreprise"/>
            <br>
            <input type = "text" id = "mail_ex" placeholder = "Adresse mail expediteur">
            <br>
            <input type = "text" id = "sujet" placeholder = "Sujet">
            <textarea id = "message" placeholder = "Mail"></textarea>
            <input type = "submit" value = "Envoyer" id = "send"/>
        </main>
        <footer>
            <a href = "#" target = blank>CGU</a>
            <a href = "#" target = blank>Doc</a>
        </footer>
        <script>
            <?php include("../php/javascript.php"); ?>
            mainContact();
        </script>
    </body>
</html>