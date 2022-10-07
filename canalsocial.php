<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Canal Social</title>
<style type="text/css">
.boton
{
	background:url(imagenes/sprite.png);
	background-repeat:no-repeat;
	background-position:top center;
}

  .precarga {
    background:transparent url(imagenes/712.GIF) center no-repeat;
 }


/*
.menu
{
	margin-top: -548px;	
}
.menu1
{
	 margin-left: 161px;
    margin-top: -64px;
}
.menu2
{
	margin-left: 322px;
margin-top: -64px;
}
.menu3
{
	margin-left: 483px;
margin-top: -64px;
}
.menu4
{
	margin-left: 644px;
margin-top: -64px;
}
.youtube
{
	
	cursor:pointer;
	/*float:left;
	margin-top: -66px;
	margin-left: 41px;
}

.youtube:hover
{
	margin-top: -66px;
	margin-left: 41px;
	background-position:0px -80px;
}

.instagram
{
	/*background:url(imagenes/youtube2.png);
	background-repeat:no-repeat;
	cursor:pointer;
	/*float:left;
	margin-top: -66px;
margin-left: 196px;
}
.instagram:hover
{
	margin-top: -66px;
margin-left: 196px;
	
}
/*pinterest
.pinterest
{
	/*background:url(imagenes/youtube2.png);
	background-repeat:no-repeat;
	cursor:pointer;
	/*float:left;
	margin-top: -66px;
margin-left: 353px;
}
.pinterest:hover
{
	margin-top: -66px;
margin-left: 353px;
}
/*twiter*
.twiter
{
	/*background:url(imagenes/youtube2.png);
	background-repeat:no-repeat;
	cursor:pointer;
	/*float:left;
	margin-top: -66px;
margin-left: 517px;
}
.twiter:hover
{
	margin-top: -66px;
margin-left: 517px;
	
}
/*wordpress*
.wordpress
{
	/*background:url(imagenes/youtube2.png);
	background-repeat:no-repeat;
	cursor:pointer;
	/*float:left;
	margin-top: -66px;
margin-left: 669px;
}
.wordpress:hover
{
	margin-top: -66px;
margin-left: 669px;
	
}
.innertube{
	margin-top: 46px;
	margin-left:3px;
	min-height:7%;
}
iframe
{
	background-color:transparent;
}*/
</style>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
$(document).ready(function() {
    $("#cssmenu li").on("click", function() {
        $("#cssmenu li").removeClass("active");
        $(this).addClass("active");
    });
});
 function preguntas(valuePreg,posx,posy)
 {
	
	// alert(valuePreg);
	var preguntas = document.getElementById("preguntas");
	preguntas.innerHTML = " "; 
	//robos
	if(valuePreg == 0 )
	{	 
	document.getElementById('impreload').setAttribute('class','precarga')
	document.getElementById('impreload').style.display='block';
preguntas.innerHTML='<iframe  src="youtube.php"width="770" height="420" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
		if(valuePreg ==1 )
	{	 
	document.getElementById('impreload').setAttribute('class','precarga')
	document.getElementById('impreload').style.display='block';
preguntas.innerHTML='<iframe   scrolling="no"  src="instagram.php" width="540" height="420" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
	if(valuePreg ==2 )
	{	 
	document.getElementById('impreload').setAttribute('class','precarga')
	document.getElementById('impreload').style.display='block';
preguntas.innerHTML='<iframe  src="pinterest.php" width="620" height="440" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';
document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
	if(valuePreg ==3 )
	{	 
	document.getElementById('impreload').setAttribute('class','precarga')
	document.getElementById('impreload').style.display='block';
preguntas.innerHTML='<iframe scrolling="no" src="twitter.php" width="670" height="420" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>';
document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
	if(valuePreg ==4 )
	{	 
	document.getElementById('impreload').setAttribute('class','precarga')
	
preguntas.innerHTML='<iframe  src="blog.php" width="670" height="440" frameborder="0" align="left" marginheight="30" marginwidth="0" align=left></iframe>'; 
/*if(preguntas.innerHTML!=null)
{
	setTimeout(
	document.getElementById('impreload').style.display='none',3000)
}
*/
document.getElementById('preguntas').style.marginLeft=posx+'px';document.getElementById('preguntas').style.marginTop=posy+'px';
	}
 }
 
 
	</script>
</head>

<body class="wrapper">

<style>
li{ list-style:none;}
ul{position: relative;
bottom: 12px;}
.wrapper{ width:790px; height:700px; background:url(imagenes/marcimex_faq.jpg) no-repeat 0 0 scroll; margin:0;}
.men2u{ float:left; width:99%; background:url(imagenes/fondomenu.jpg) repeat-x; margin:150px 4px 0;}
.men2u ul li{height: 60px; margin: 0 auto; border-right:1px solid #1474be;padding-left: 62px; }
.boton{ width:85px; float:left; background:url(imagenes/sprite.png) no-repeat top center; background-position:20 0;}
#youtube{ background-position:0px 0px}
#youtube:hover,#youtube.active{ background-position:0px -60px; cursor:pointer}
#instagram{ background-position:26px -360px}
#instagram:hover,#instagram.active{ background-position:26px -420px; cursor:pointer}
#pinterest{ background-position:33px -240px}
#pinterest:hover,#pinterest.active{ background-position:33px -300px; cursor:pointer}
#twiter{ background-position:36px -120px}
#twiter:hover,#twiter.active{ background-position:36px -180px; cursor:pointer}
#blog{ background-position:34px -480px}
#blog:hover,#blog.active{ background-position:34px -540px; cursor:pointer}
.instagram{

	margin-top:150px;

	text-align:center;

	margin-left: 30px;

	margin-right: 0px;

}
iframe
{
	background-color:transparent; 
}
h1
{
	 color:#3111c6;
}
.loader
{
	height: 0;
    left: 307px;
    margin: 209px auto;
    position: absolute;
    z-index: -12;
}
</style>

<div class="men2u" >
	<ul id="cssmenu">
    	<li onclick="preguntas('0','0','0');" class="boton active"  class="precarga"id="youtube">
         &nbsp;
        </li>
        <li onclick="preguntas('1','120','18');" class="boton " id="instagram">
         
        </li>
        <li onclick="preguntas('2','100','18');" class="boton " id="pinterest">
         &nbsp;
        </li>
        <li onclick="preguntas('3','85','18');"  class="boton " id="twiter">
         &nbsp;
        </li>
        <li  onclick="preguntas('4','-20','18');" class="boton " id="blog">
         &nbsp;
        </li>
    
    </ul>
   

<div class="innertube">
<div class="loader">
<div style="width: 140px; height: 154px"  id="impreload">
	
</div>
</div>
	<div id="preguntas">
<script>
    document.getElementById('impreload').setAttribute('class','precarga')
	</script>
		<iframe  src="youtube.php" width="770" height="420" frameborder="0" align="left" marginheight="0" marginwidth="0" align=left></iframe>
	</div>
</div>
</div>
   
</body>
</html>