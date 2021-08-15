"using strict"

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
    let footer = document.querySelector("footer > ul");
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
    }
    else if(event.target.src.includes("bx-x.svg"))
    {
        event.target.src = "../images/bx-menu.svg";
        displayNone(navigation);
    }
}

function displayGrid(element)
{
    element.style.display = "grid";
}

function displayNone(element)
{
    element.style.display = "none";
}