<?php foreach ($departmentsList as $department): ?>
	<li id="department-<?php echo $department['id']; ?>"><?php echo $department['address']; ?></li>
<?php endforeach ?>