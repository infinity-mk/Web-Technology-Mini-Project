<style>
:root {
  --bg: #212121;
  --nc: #F5F5F5;
  --bo: #2d6898;
}
#header{
	position:absolute;
	left:0;
	top:0;
	width:100%;
	height:9%;
	z-index:1;
	background-color:var(--bg);
	color:var(--nc);
}
#header:hover
{
	opacity:0.8;
}
#mname{
	position:absolute;
	left:5%;
	top:0;
	width:15%;
	height:9%;
	color: var(--nc);
    font-weight: bold;
	font-size:20px;
	font-family:"Courier New", Courier, monospace;
    background-color: var(--bg);
	
	z-index:2;
	text-align:center;
}
#mname:hover{
	border:1px solid var(--bo);
}
#about{
	position:absolute;
	left:75%;
	top:0%;
	width:10%;
	height:9%;
	color: var(--nc);
    font-weight: bold;
	font-size:20px;
	font-family:"Courier New", Courier, monospace;
    background-color: var(--bg);
	
	z-index:2;
	text-align:center;
}
#about:hover{
	border:1px solid var(--bo);
}
#contact{
	position:absolute;
	left:86%;
	top:0%;
	width:10%;
	height:9%;
	color: var(--nc);
    font-weight: bold;
	font-size:20px;
	font-family:"Courier New", Courier, monospace;
    background-color: var(--bg);
	
	z-index:2;
	text-align:center;
}
#contact:hover{
	border:1px solid var(--bo);
}

</style>

<div id="header">
</div>
<a href="index.php">
<div id="mname">
<p>PIERCEMAN SHOP</p>
</div>
</a>


