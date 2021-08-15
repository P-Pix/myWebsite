<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <title>Contact</title>
        <?php include("../php/head.php") ?>
        <link rel = "stylesheet" href = "../style/stylcontact.css"/>
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
            <form action = "../php/send.php" method = "POST">
                <input type = "text" name = "name" placeholder = "Expediteur"/>
                <br>
                <input type = "text" name = "mail_ex" placeholder = "Adresse mail expediteur">
                <br>
                <input type = "text" name = "sujet" placeholder = "Sujet">
                <textarea name = "message" placeholder = "Mail"></textarea>
                <input type = "submit" value = "Envoyer" id = "send"/>
            </form>
        </main>
        <?php include("../php/footer.php"); ?>
        <?php include("../php/javascript.php"); ?>
    </body>
</html>