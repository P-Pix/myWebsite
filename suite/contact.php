<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <meta  charset = "UTF-8" />
        <title>Contact</title>
        <link rel = "stylesheet" href = "../style/stylecom.css">
        <link rel = "stylesheet" href = "../style/stylother.css">
        <link rel = "stylesheet" href = "../style/stylcontact.css"/>
        <link rel = "icon" href = "../images/icon.png">
    </head>
    <body>
        <header id = "haut">
            <?php include("../php/menu.php");?>
        </header>
        <nav>
        </nav>
        <main>
            <form action = "../php/send.php" method = "POST">
                <p>Expéditeur : <input type = "text" name = "name"/></p>
                <p>Adresse mail expediteur : <input type = "text" name = "mail_ex"></p>
                <p>Sujet : <input type = "text" name = "sujet"></p>
                <p><textarea name = "message"></textarea></p>
                <input type = "submit"/>
            </form>
        </main>
        <footer>
            <ul>
                <li><a href = "#" target = blank>CGU</a></li>
                <li><a href = "#" target = blank>Docs de la page</a></li>
            </ul>
        </footer>
    </body>
</html>