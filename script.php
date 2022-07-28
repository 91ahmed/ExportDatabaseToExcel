<?php
	ob_start();
	header('Content-Type: text/html; charset=utf-8');

	require ('DatabaseConnect.php');
	require ('ExportToExcel.php');

	error_reporting(0);

	$data = [];

	if (isset($_POST['transform'])) 
	{
		$obj = new \ExportToExcel\ExportToExcel();
		$data = $obj->data();
	}

	if (empty($data)) 
	{
		exit('Empty data');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Export To Excel</title>
		<style type="text/css">
			table, th, td {
			  border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<table id="tb" >
			<thead>
				<tr>
					<?php if(is_object($data) || is_array($data)): ?>
						<?php foreach(array_keys($data[0]) as $column): ?>
							<th><?= $column ?></th>
						<?php endforeach; ?>
					<?php endif; ?>
				</tr>
			</thead>
			<tbody>
				<?php if(is_object($data) || is_array($data)): ?>
					<?php foreach($data as $key => $value): ?>
						<tr>
							<?php foreach (array_values($value) as $key => $value): ?>
								<td> <?= $value ?> </td>
							<?php endforeach; ?>
						</tr>
					<?php endforeach; ?>
				<?php endif; ?>
			</tbody>
		</table>

		<script type="text/javascript">
	
		</script>
	</body>
</html>

<?php
	$filename = 'export_'.date('dmY').'_xls_'.time().'.xls';
	header("Content-Type: application/ms-excel");
	header("Content-Disposition:attachment; filename={$filename}");
	ob_end_flush();
	exit();
?>