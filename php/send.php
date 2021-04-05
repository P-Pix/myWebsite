<!DOCTYPE html>
<html lang = "fr-FR">
    <head>
        <meta  charset = "UTF-8" />
        <title>Envoie</title>
        <link rel = "icon" href = "../images/icon.png">
        <script type = "text/javascript" src = "../javascript/send.js"></script>
    </head>
    <body>
        <?php 
            $to = 'guillaume200202@gmail.com';
            $sujet = $_POST['sujet'];
            $message = $_POST['message'];
            $name = $_POST['name'];
            $expediteur = $_POST['mail'];
            $message = wordwrap($message, 70, "\r\n");
            if(mail($to, $sujet, $message, $name, $expediteur))
            {
                echo 'true';
            }
            else
            {
                echo 'false';
            }
        ?>
    <script>
        "using strict"
        send()
    </script>
    </body>
</html>