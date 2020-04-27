<?php
session_start()
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Oulu University Bus Stop Helper</title>
		<link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
	</head>
<body>

<?php
"echo <body style='background-color:".$_SESSION['page_color']."'>";
?>

<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">OUBusSH</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo base_url(); ?>">Home</a></li>
				<li><a href="<?php echo base_url(); ?>about">About</a></li>
				<button type="button" id="theme_change" class="theme">Theme change</button>
			</ul>
		</div>
	</div>
</nav>

<script>

document.getElementById("theme_change").onclick = function() {theme_changer()} ;

function theme_changer()
{
	if(document.body.style.backgroundColor === "black")
	{
		document.body.style.backgroundColor = "white";
		<?php $_SESSION['page_color'] = "white";?>;
	}
	else
	{
		document.body.style.backgroundColor = "black";
		<?php $_SESSION['page_color'] = "black";?>
	}
	
}

</script>

<div class="container">