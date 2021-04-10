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
            $to = 'guillaumelemonniercontact@gmail.com';
            if(!empty($_POST['sujet']) &&!empty($_POST['message']) && !empty($_POST['name']) && !empty($_POST['mail_ex']))
            {
                $sujet = htmlspecialchars($_POST['sujet']);
                $message = htmlspecialchars($_POST['message']);
                $name = htmlspecialchars($_POST['name']);
                $expediteur = htmlspecialchars($_POST['mail_ex']);
                $message = wordwrap($message, 70, "\r\n");
                $headers = array(
                    'From' => $expediteur,
                    'Reply-To' => $to,
                    'X-Mailer' => 'PHP/' . phpversion()
                    );
                echo print_r($_POST);
                echo print_r($headers);
                if(mail($to, $sujet, $message, $headers))
                {
                    ?>
                    <script>
                        alert("send")
                    </script>
                    <?php
                }
                else
                {   ?>
                    <script>
                        alert("not send")
                    </script>
                    <?php
                }
                ?>
                <script>
                    "using strict"
                    send()
                </script>
                <?php
            }
            else
            {
                ?>
                <script>
                    alert("Tous les champs ne sont pas rempli");
                    window.location.href = "../suite/contact.php";
                </script>
                <?php
            }
        ?>
    </body>
</html>