<!DOCTYPE html>
<
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

<link rel="stylesheet" type="text/css" href="css/css1.css">

<script>
	function toggle_visibility(id){
		var e = document.getElementById(id);
		if(e.style.display=='block')
			e.style.display = 'none';
		else
			e.style.display = 'block';
		}
</script>

</head>

<?php
session_start();
if(isset($_POST['username'])){
	header('localhost:index.php');
	}

?>

<body>
<div id = "container">
<!-- Header -->
<div id = "header">

    <table border="0" cellspacing="20px" width="100%" >
    <tr>
    	<td width="80%" align="left"> <span style="font-size: 25px;"> <b>Sistema Mrfood</b></span>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:36px"></span></td>
        <td width="10%">&nbsp;  </td>
        <td width="10%" align="right"><a href="javascript:void(0)"
		 onclick="toggle_visibility('popup-box1')"><input type="button" id="btnadd" value="Acceder"></a></td>
        <td width="0%">&nbsp;  </td>
    </tr>
    </table>
</div>
<!-- Content -->
<div id = "content_area">
<br>
  
</div>

<img src="images\Mr file (2).png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">



<!-- Footer -->
<div id = "footer"> 
<table border="0" cellpadding="15px" align="center"; style="size: 12px; font-family: 'Courier New', Courier, monospace; color: #FFF; font-size: 12px;">
<tr>
	<td>
       
    </td>
</tr>
</table>
 </div>

<div id="popup-box1" class="popup-position">
<div id="popup-wrapper">
<div id="popup-container">
<div id="popup-head-color2">
    <p style="text-align:right !important; font-family: 'Courier New', Courier, monospace;font-size:15px;"><a href= "javascript:void(0)" onclick="toggle_visibility('popup-box1')"><font color="FFAC33"> X </font></a></p>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;font-size:16px;"> Formulario Iniciar Sesión </p>
    </div>
<br><br><br><br>

<form action="login_process.php" method="POST">
<table border="0" align="center">
<tr>
<td>Nombre de Usuario:</td>
<td align="center"><input type="text" id="txtbox" name="username" placeholder="Usuario" required><br></td>
</tr>

<tr>
<td>Contraseña:</td>
<td align="center"><input type="password" id="txtbox" name="password" placeholder="contraseña" required><br></td>
</tr>

<tr>
	<td> &nbsp; </td>
</tr>

<tr>
	<td> &nbsp; </td>
	<td  align="center"><input type="SUBMIT" id="btnnav" value="Iniciar Sesión"></td>
</tr>

</table>
</form>

</div>
</div>
</div>



</div>

</body>
</html>
