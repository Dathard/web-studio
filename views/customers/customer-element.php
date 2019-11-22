<div id="row_<?php echo $customerData['id'] ?>" class="row">
	<div class="full-name">
		<p><?php echo $customerData['full-name'] ?></p>
	</div>
	<div class="phone">
		<p><?php echo $customerData['phone'] ?></p>
	</div>
	<div class="email">
		<p><?php echo $customerData['email'] ?></p>
	</div>
	<div class="operations">
		<a href="/customer/<?php echo $customerData['id'] ?>" title="Картка клієнта">
			<i class="far fa-list-alt"></i>
		</a>
	</div>
</div>