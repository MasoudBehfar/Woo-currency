<?php
include "db.php";
$stmt = $connection->prepare( "SELECT * FROM currency " );//WHERE dollar > 6500 AND dollar < 7500
$stmt->execute();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
	<link rel="stylesheet" href="css/bulma.min.css">
</head>
<body>
		<div class="section">
			<div class="container">
				<table class="table">
					<thead>
					<tr>
						<th><abbr title="Position">ID</abbr></th>
						<th>Dollar</th>
						<th><abbr title="Played">Euro</abbr></th>
						<th><abbr title="Won">Create Date</abbr></th>
						<th>Operations</th>
					</tr>
					</thead>
					<tbody>
					<?php while ($record = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
					<tr>
						<th><?php  echo $record['id'];?></th>
						<td><?php  echo $record['dollar'];?></td>
						<td><?php  echo $record['euro'];?></td>
						<td><?php  echo $record['create_date'];?></td>
						<td>
							<a href="delete.php?id=<?php echo $record['id'];?>" class="button is-danger">delete</a>
							<a href="edit.php?id=<?php echo $record['id'];?>" class="button is-info">edit</a>
						</td>
					</tr>
					<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
</body>
</html>