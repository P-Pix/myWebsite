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
        const mandrill = require('mandrill');
        mandrill('/message/send',
        {
            mailexpeditor, 
            nameexpeditor,
            mymail,
            sujet,
            mail,
        });
        let opts = {"type":"messages","call":"send","message":{"html": "<h1>example html</h1>", "text": "example text", "subject": "example subject", "from_email": "wes@werxltd.com", "from_name": "example from_name", "to":[{"email": mymail, "name": "Wes Widner"}],"headers":{"...": "..."},"track_opens":true,"track_clicks":true,"auto_text":true,"url_strip_qs":true,"tags":["test","example","sample"],"google_analytics_domains":["werxltd.com"],"google_analytics_campaign":["..."],"metadata":["..."]}};
        
        mandrill.call(opts, function(data){
            console.log(data);
        });
        */

        Email.send(
        {
            /*
            Host: "smtp.gmail.com",
            Username: "sender@email_address.com",
            Password: "Enter your password",
            */
            To: mymail,
            From: mailexpeditor,
            Subject: sujet,
            Body: mail,
        }).then(function () 
        {
            alert("Tranks to send me this message. You will be redirect to the home page");
            window.location.href = "../index.php";
        });
    }
}