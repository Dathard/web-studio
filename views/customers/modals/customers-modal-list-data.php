<?php foreach ($customerData as $customer): ?>
	<li id="customer-<?php echo $customer['id']; ?>"><?php echo $customer['full-name']; ?></li>
<?php endforeach ?>