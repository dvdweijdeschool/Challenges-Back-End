<?php 
	include "../index/header.php";
	$id = $_GET["number"];
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		deleteList($id);
	}
?>
<body>
	<div class="createContainer">
		<div class="contentContainer">
			<h1>
				Weet u zeker dat u deze lijst wilt verwijderen?
			</h1>
			<p>
				Als u deze lijst verwijder zullen ook alle taken in deze lijst verwijderd worden en kunt u deze lijst en de taken die er in zitten niet meer terug krijgen.
			</p>
			<form class="deleteForm" method="POST">
				<button type="submit">
					Verwijderen
				</button>
			</form>
			<a class="deleteBackButton" href="home.php">
				<button>
					Terug
				</button>
			</a>
		</div>
	</div>
</body>
<?php include "../index/footer.php" ?>