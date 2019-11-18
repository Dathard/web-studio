<?php include ROOT.'/views/layouts/header.php'; ?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page card_wrapper">
	<div id="project_card" class="card wrapperPage">
		<h2 class="page_header">Проект №<?php echo $projectData['id']; ?></h2>
		<hr>
		<div>
			<p>Домен: 
				<span>
					<?php echo $projectData['domain']; ?>
				</span>
			</p>
			<p>Пакет: 
				<span>
					<?php echo $projectData['package']; ?>
				</span>
			</p>
			<p>Вартість: 
				<span>
					<?php echo $projectData['price']; ?>
				</span>
			</p>
			<p>Відділення: 
				<span>
					<?php echo $projectData['address_department']; ?>
				</span>
			</p>
			<p>Замовник: 
				<a href="/customer/<?php echo $projectData['id_customer']; ?>" target="_blank">
					<?php echo $projectData['full-name']; ?>
				</a>
			</p>
		</div>
	</div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>