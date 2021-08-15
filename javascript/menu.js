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
    let header = document.querySelector("header > ul");
    let footer = document.querySelector("footer > ul");
    let widthnav = parseInt((windowwidth / 100) / 2);
    let menunav = document.querySelector("nav");
    if(windowwidth < 2000)
    {
        header.style.gridTemplateColumns = "repeat(" + widthnav + ", " + 87.5 / widthnav + "%)";
        footer.style.gridTemplateColumns = "repeat(" + widthnav + ", " + 87.5 / widthnav + "%)";
        if(header.children.length / widthnav == parseInt(header.children.length / widthnav))
        {
            menunav.style.marginTop = parseInt(header.children.length / widthnav) * 2 + "em";
        }
        else 
        {
            menunav.style.marginTop = parseInt(header.children.length / widthnav + 1) * 1.66 + "em";
        }
    }
    else
    {
        header.style.gridTemplateColumns = "repeat(10, 10%)";
        footer.style.gridTemplateColumns = "repeat(10, 10%)";
        menunav.style.marginTop = "2em";
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
    else
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