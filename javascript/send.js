const mandrill = require("node-mandrill");

function mainContact()
{
    const button = document.querySelector("#send");
    button.addEventListener("click", send);
}

function send(event)
{
    event.preventDefault();
    const emptystring = 0;
    const mymail = "guillaume200202@gmail.com";
    const nameexpeditor = document.querySelector("#name").value;
    const mailexpeditor = document.querySelector("#mail_ex").value;
    const sujet = document.querySelector("#sujet").value;
    const mail = document.querySelector("#message").value;
    console.log("Name expeditor = ", nameexpeditor);
    console.log("Mail expeditor = ", mailexpeditor);
    console.log("Sujet = ", sujet);
    console.log("Mail = ", mail);
    if(nameexpeditor.length == emptystring || mailexpeditor.length == emptystring || sujet.length == emptystring || mail.length == emptystring)
    {
        // not sending
        alert("Tous les champs ne sont pas remplis");
    }
    else
    {
        // Send mail
        /*
        mandrill('/message/send',
        {
            {mailexpeditor, nameexpeditor},
            mymail,
            sujet,
            mail,
        });
        */
        alert("Tranks to send me this message. You will be redirect to the home page");
        window.location.href = "../index.php";
    }
}