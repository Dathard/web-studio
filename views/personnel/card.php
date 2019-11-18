<?php include ROOT.'/views/layouts/header.php'; ?>

<?php include ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page personnel_card_wrapper">
	<div id="personnel_card" class="wrapperPage">
		<h2 class="page_header"><?php echo $personnelData['full-name']; ?></h2>
		<div>
			<p>Адреса відделення: 
				<span>
					<?php echo $personnelData['address_department']; ?>
				</span>
			</p>
			<p>Посада: 
				<span>
					<?php echo $personnelData['position']; ?>
				</span>
			</p>
			<p>Місце проживання: 
				<span>
					<?php echo $personnelData['address']; ?>
				</span>
			</p>
			<p>Phone: 
				<span>
					<?php echo $personnelData['phone']; ?>
				</span>
			</p>
			<p>Номер банківської карти: 
				<span>
					<?php echo $personnelData['card_number']; ?>
				</span>
			</p>
		</div>
	</div>



	<div id="accounting" class="wrapperPage">
		<h2 class="page_header">Історія нарахувань</h2>
		<div class="table">
			<div class="headerTable">
				<div class="premium">
					<p>Пермії</p>
				</div>
				<div class="allowances">
					<p>Надбавки</p>
				</div>
				<div class="salary">
					<p>Зарплата</p>
				</div>
			</div>

			<?php foreach($accounting as $row): ?>
				<div id="row_<?php echo $project['id']; ?>" class="row">
					<div class="premium">
						<p><?php echo $row['premium'] ?></p>
					</div>
					<div class="allowances">
						<p><?php echo $row['allowances'] ?></p>
					</div>
					<div class="salary">
						<p><?php echo $row['salary'] ?></p>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>