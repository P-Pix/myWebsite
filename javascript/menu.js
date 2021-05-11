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