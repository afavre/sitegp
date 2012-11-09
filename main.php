<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Gestion des photos</title>
<link rel="stylesheet" type="text/css" href="CSS/main_principal.css">
<LINK rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script src="js/script.js"></script>

<script	type="text/javascript">
	//Javascript pour l'utilisation de sortable dans le menu
    $(function() {
        $( "#sortable,.sort" ).sortable({
        connectWith: ".connect"
    }).disableSelection();
    });
	
	function afficherPhoto(lienPhoto){
	
	$('#photo').html('<img src="'+ lienPhoto +'">');
	$('#photo').fadeIn();
	
   }
</script>

</head>
<body>

<div id="identite">

<h1>Nom1</h1>
</div>

<div id="navigation">
<h1>Navigation</h1>

<li>Home page</li>

				
				
<ul class="nav connect" id="sortable">

  <li><a href="#" title="Album 1">Album 1</a></li>
  
  <li class="toggleSubMenu"><span>Album 2</span>
    <ul class="subMenu connect sort">
      <li class="toggleSubMenu2"><span>Sous Album 2.1</span>
	  
		<ul id="imgstore" class="subMenu2 connect sort">
			<li><a href="#" title="Photo 1" onclick="afficherPhoto('image/test1.jpg')">Photo 1</a></li>
			<li><a href="#" title="Photo 2" onclick="afficherPhoto('image/test2.jpg')">Photo 2</a></li>
			<li><a href="#" title="Photo 3" onclick="afficherPhoto('image/test3.jpg')">Photo 3</a></li>
		
		</ul>
	  </li>
	  
      <li><a href="#" title="Sous Album 2.2">Sous Album 2.2</a></li>
      <li><a href="#" title="Sous Album 2.3">Sous Album 2.3</a></li>
    </ul>
    </li>
	
    <li class="toggleSubMenu"><span>Album 3</span>
      <ul class="subMenu connect sort">
        <li><a href="#" title="Photo 1">Photo 1</a></li>
        <li><a href="#" title="Photo 2">Photo 2</a></li>
      </ul>
    </li>
    <li><a href="#" title="Aller � la page 4">Album 4</a></li>
</ul>
</div>

<div id="contenu">

<h1>Contenu</h1>


		<div id ="photo"></div>
		<form name="form2" method="post" action="">
				<input type="file" id="getimage" />
			</form>
			<script language="javascript" type="text/javascript">
				var name;
				function imageHandler(e2) 
				{ 
					$('#imgstore').append('<li><a href="' + e2.target.result +'">'+name+'</a></li>');
				}
				function loadimage(e1)
				{
					name = e1.target.files[0].name;
					var filename = e1.target.files[0];
					var fr = new FileReader();
					fr.onload = imageHandler;  
					fr.readAsDataURL(filename); 
				}
				window.onload=function()
				{
					var y = document.getElementById("getimage");
					y.addEventListener('change', loadimage, false);
				}
			</script>

</div>


</body>


</html>