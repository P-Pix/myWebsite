"using strict"

function menuAppear(event)
{
    console.log(event.target.children);
    if(event.target.children[0].style.display == "block")
    {
        event.target.children[0].style.display = "none";
    }
    else
    {
        event.target.children[0].style.display = "block";
    }
}

function mediaMenuBar()
{
    let windowwidth = window.innerWidth;
    let nav = document.querySelector("header > ul");
    let footer = document.querySelector("footer > ul");
    let widthnav = parseInt((windowwidth / 100) / 2);
    console.log("width nav = ", widthnav, "with window width = ", windowwidth);
    if(windowwidth < 2000)
    {
        nav.style.gridTemplateColumns = "repeat(" + widthnav + ", " + 87.5 / widthnav + "%)";
        footer.style.gridTemplateColumns = "repeat(5, 20%)";
    }
    else
    {
        nav.style.gridTemplateColumns = "repeat(10, 10%)";
        footer.style.gridTemplateColumns = "repeat(10, 10%)";
    }
}