var det1=document.getElementById('first');
var det2=document.getElementById('middle');
var d1=document.getElementById('d1');
var d2=document.getElementById('d2');
var box=document.getElementById('box');
var box1=document.getElementById('box1');
var box2=document.getElementById('box2');
var box3=document.getElementById('box3');
var val1=document.getElementById('insert').selectedIndex;
var but=document.getElementsByClassName("but")[0];
var opt=document.getElementsByTagName("option");

d1.addEventListener("mouseenter",function (){
	console.log("working");
	det1.style.visibility="visible";
});
d1.addEventListener("mouseleave",function(){
	det1.style.visibility="hidden";
});

d2.addEventListener("mouseenter",function (){
	console.log("working");
	det2.style.visibility="visible";
});
d2.addEventListener("mouseleave",function(){
	det2.style.visibility="hidden";
});

d1.addEventListener("click",function (){
	box.style.visibility="visible";
	box0.style.visibility="hidden";
});

d2.addEventListener("click",function (){
	box0.style.visibility="visible";
	box.style.visibility="hidden";
});
