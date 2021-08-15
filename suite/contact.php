<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <title>Contact</title>
        <?php include("../php/head.php") ?>
        <link rel = "stylesheet" href = "../style/stylcontact.css"/>
    </head>
    <body>
        <?php include("../php/menu.php");?>
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
        <?php include("../php/javascript.php"); ?>
    </body>
</html>