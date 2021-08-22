function main()
{
    let listelangage = document.querySelectorAll("header div > ul > li");

    for(let x = 0; x < listelangage.length; x ++)
    {
        listelangage[x].addEventListener("click", menuAppear);
    }
    let menuicon = document.querySelector("#menu");
    menuicon.addEventListener("click", navigationMenu);

    setInterval(mediaMenuBar, 100);
}

function menuAppear(event)
{
    if(event.target.children[0].style.display == "grid")
    {
        displayNone(event.target.children[0]);
    }
    else
    {
        displayGrid(event.target.children[0]);
    }
}

function mediaMenuBar()
{
    let windowwidth = window.innerWidth;
    let header = document.querySelector("header div > ul");
    let footer = document.querySelector("footer");
    let widthnav = parseInt((windowwidth / 100) / 2);
    if(windowwidth < 2000)
    {
        header.style.gridTemplateColumns = "repeat(" + widthnav + ", " + 87.5 / widthnav + "%)";
        footer.style.gridTemplateColumns = "repeat(" + widthnav + ", " + 87.5 / widthnav + "%)";
    }
    else
    {
        header.style.gridTemplateColumns = "repeat(10, 10%)";
        footer.style.gridTemplateColumns = "repeat(10, 10%)";
    }
}

function navigationMenu(event)
{
    let navigation = document.querySelector("nav");
    if(event.target.src.includes("bx-menu.svg"))
    {
        event.target.src = "../images/bx-x.svg";
        displayGrid(navigation);
        openNavigationBar(navigation);
    }
    else if(event.target.src.includes("bx-x.svg"))
    {
        event.target.src = "../images/bx-menu.svg";
        displayNone(navigation);
        closeNavigationBar(navigation);
    }
}

function openNavigationBar(navigation)
{
    
}

function closeNavigationBar(navigation)
{

}

function displayGrid(element)
{
    element.style.display = "grid";
}

function displayNone(element)
{
    element.style.display = "none";
}