<?php

if(isset($_GET['lg'])) //Language modification
{
	if($_GET['lg'] == 'en')
		setcookie("lg","en");
	
	else if($_GET['lg'] == 'fr')
		setcookie("lg","fr");

	else
		setcookie("lg","fr");
		
}


?>
<script type="text/javascript">
<!--
	document.location.href = "index.php";
-->
</script>