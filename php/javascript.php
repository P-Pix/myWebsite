<script>
    "using strict"
    let listelangage = document.querySelectorAll("header div > ul > li");
    let listelang = document.querySelectorAll("header div > ul");

    for(let x = 0; x < listelangage.length; x ++)
    {
        listelangage[x].addEventListener("click", menuAppear);
    }
    let menuicon = document.querySelector("#menu");
    menuicon.addEventListener("click", navigationMenu);

    setInterval(mediaMenuBar, 100);
</script>