<?php include_once ROOT.'/views/layouts/header.php'; ?>

<?php include_once ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page">
    <div id="departments" class="wrapperPage">
        <h2 class="page_header">Відділення</h2>
        <div class="table">
            <div class="headerTable">
                <div class="address">
                    <p>Aдреса відділення</p>
                </div>
                <div class="site">
                    <p>Сайт</p>
                </div>
                <div class="personnel">
                    <p>Кількість персоналу</p>
                </div>
                <div class="unfinished-projects">
                    <p>Незакінчені проекти</p>
                </div>
            </div>

            <?php foreach($departmentsList as $department): ?>
                <div id="row_<?php echo $department['id']; ?>" class="row" title="Детальна інформація">
                    <div class="address">
                        <p><?php echo $department['address']; ?></p>
                    </div>
                    <div class="site">
                        <p><?php echo $department['site']; ?></p>
                    </div>
                    <div class="personnel">
                        <p><?php echo $department['amount_of_workers']; ?></p>
                    </div>
                    <div class="unfinished-projects">
                        <p><?php echo $department['unfinished_projects']; ?></p>
                    </div>
                </div>
            <?php endforeach ?>

        </div>
    </div>
</section>

<?php include_once ROOT.'/views/layouts/footer.php'; ?>