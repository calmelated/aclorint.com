function menuOn()
{
    document.getElementById("midmenu_1").style.visibility = 'hidden';
    document.getElementById("midmenu_2").style.visibility = 'hidden';
    document.getElementById("midmenu_3").style.visibility = 'hidden';
    document.getElementById("midmenu_4").style.visibility = 'hidden';
}

function menuOff()
{
    document.getElementById("midmenu_1").style.visibility = 'visible';
    document.getElementById("midmenu_2").style.visibility = 'visible';
    document.getElementById("midmenu_3").style.visibility = 'visible';
    document.getElementById("midmenu_4").style.visibility = 'visible';
}

function checkhome()
{
	if(document.getElementById("frontpage") && document.getElementById("frontpage").value)
	{
		document.getElementById("scissors").style.visibility = 'visible';
	}
}