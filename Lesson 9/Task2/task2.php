<?php
	
	require_once 'IUser.php';
	require_once 'IEmployee.php';
	require_once 'Employee.php';
	
	$worker1 = new Employee('Taras', 'Sakura', 32, 25434, 'male');
	$worker2 = new Employee('Alessandro', 'Del Piero', 34, 26777, 'male');
	$worker3 = new Employee('Olena', 'Gilka', 24, 7999, 'female');
	$worker4 = new Employee('Dusan', 'Vlahovic', 21, 21000, 'male');
	$worker5 = new Employee('Federico', 'Chiesa', 22, 24344, 'male');
	$employees = [];
	array_push($employees, $worker1->toArray(), $worker2->toArray(), $worker3->toArray(), $worker4->toArray(), $worker5->toArray());
	echo 'Report card of employees:'
	?>
<table >
	<?php foreach ($employees as $employeer): ?>
		<tr>
			<?php foreach ($employeer as $row): ?>
				<td style="padding: 5px; border: 1px solid black"> <?php echo $row; ?></td>
			<?php endforeach; ?>
		</tr>
	<?php endforeach; ?>
</table>

