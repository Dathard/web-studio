<?php include ROOT.'/views/layouts/header.php'; ?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page">
	<div id="customers" class="wrapperPage">
		<div class="header">
			<h2 class="page_header">Клієнти</h2>
		</div>
		<div class="table">
			<div class="headerTable">
				<div class="full-name">
					<p>ПІБ</p>
				</div>
				<div class="phone">
					<p>Телефон</p>
				</div>
				<div class="email">
					<p>email</p>
				</div>
				<div class="operations"></div>
			</div>

			<div class="row show_new_customers_modal" onclick="showNewCustomerModal();" title="Новий проект">
                <div>+</div>
            </div>

			<?php foreach( $customersList as $customer ): ?>
				<div id="row_<?php echo $customer['id'] ?>" class="row">
					<div class="full-name">
						<p><?php echo $customer['full-name'] ?></p>
					</div>
					<div class="phone">
						<p><?php echo $customer['phone'] ?></p>
					</div>
					<div class="email">
						<p><?php echo $customer['email'] ?></p>
					</div>
					<div class="operations">
						<a href="/customer/<?php echo $customer['id'] ?>" title="Картка клієнта">
							<i class="far fa-list-alt"></i>
						</a>
					</div>
				</div>
			<?php endforeach ?>

		</div>
	</div>
</section>

<?php include_once ROOT.'/views/customers/modals/new-customers.php'; ?>

<?php include ROOT.'/views/layouts/footer.php'; ?>