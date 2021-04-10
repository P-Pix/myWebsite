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
                <input type = "text" name = "name" placeholder = "Expediteur"/>
                <br>
                <input type = "text" name = "mail_ex" placeholder = "Adresse mail expediteur">
                <br>
                <input type = "text" name = "sujet" placeholder = "Sujet">
                <textarea name = "message" placeholder = "Mail"></textarea>
                <input type = "submit" value = "Envoyer" id = "send"/>
            </form>
        </main>
    </body>
</html>