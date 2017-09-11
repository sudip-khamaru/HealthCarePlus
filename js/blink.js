function blinkFont()
{
  document.getElementById("blink1").style.color="red";
	document.getElementById("blink1").style.background="yellow";
	setTimeout("setblinkFont()",500);
}

function setblinkFont()
{
  document.getElementById("blink1").style.color="yellow";
  document.getElementById("blink1").style.background="red";
  setTimeout("blinkFont()",500);
}

function blinkFont1()
{
  document.getElementById("blink").style.color="red";
	document.getElementById("blink").style.background="yellow";
  document.getElementById("blink1").style.color="red";
	document.getElementById("blink1").style.background="yellow";
	setTimeout("setblinkFont1()",500);
}

function setblinkFont1()
{
  document.getElementById("blink").style.color="red";
  document.getElementById("blink").style.background="yellow";
  document.getElementById("blink1").style.color="yellow";
  document.getElementById("blink1").style.background="red";
  setTimeout("blinkFont1()",800);
}

function blinkFont2()
{
  document.getElementById("blink1").style.color="white";
	setTimeout("setblinkFont2()",1200);
}

function setblinkFont2()
{
  document.getElementById("blink1").style.color="black";
  setTimeout("blinkFont2()",1200);
}
