<?php include ROOT.'/views/layouts/header.php'; ?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page customer_card_wrapper">
	<div id="customer_card" class="wrapperPage">
		<h2 class="page_header"><?php echo $customerData['full-name']; ?></h2>
		<div>
			<p>Email: 
				<span>
					<?php echo $customerData['email']; ?>
				</span>
			</p>
			<p>Phone: 
				<span>
					<?php echo $customerData['phone']; ?>
				</span>
			</p>
		</div>
	</div>

	<div id="projects" class="wrapperPage">
		<h2 class="page_header">Проекти</h2>
		<div class="table">
			<div class="headerTable">
				<div class="domain">
					<p>Домен</p>
				</div>
				<div class="package">
					<p>Пакет</p>
				</div>
				<div class="price">
					<p>Ціна</p>
				</div>
				<div class="status">
					<p>Статус</p>
				</div>
			</div>

			<?php foreach($projectsList as $project): ?>
				<div id="row_<?php echo $project['id']; ?>" class="row">
					<div class="domain">
						<a href="<?php echo $project['domain']; ?>" target="_blank" title="Відкрити в новій вкладці">
							<?php echo $project['domain']; ?>
						</a>
					</div>
					<div class="package">
						<p><?php echo $project['package']; ?></p>
					</div>
					<div class="price">
						<p><?php echo $project['price']; ?>$</p>
					</div>
					<div class="status">
						<p>
							<?php echo $project['status'] == 1 ? 'Виконано' : 'Не виконано' ?>
						</p>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>