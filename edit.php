<?php
include "db.php";
$id = $_GET['id'];
$stmt = $connection->prepare("SELECT * FROM currency WHERE id=$id");
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Insert Data</title>
	<link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
<div class="section">
	<div class="container">
		<form action="update.php" method="post">
			<div class="field">
				<label class="label">Dollar</label>
				<div class="control">
					<input
						name="dollar"
						class="input"
						type="text"
						placeholder=""
						value="<?php  echo $record['dollar'];?>"
					>
				</div>
			</div>
			<div class="field">
				<label class="label">Euro</label>
				<div class="control">
					<input
						name="euro"
						class="input"
						type="text"
						placeholder=""
						value="<?php  echo $record['euro'];?>"
					>
				</div>
			</div>
			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link">Save</button>
				</div>

			</div>
			<input type="hidden" name="id" value="<?php  echo $_GET['id']; ?>">
		</form>
	</div>
</div>
</body>
</html>