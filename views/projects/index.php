<?php include_once ROOT.'/views/layouts/header.php'; ?>

<?php include_once ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page">
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
                <div class="operations"></div>
            </div>

            <div class="row show_new_project_modal" onclick="showNewProjectModal();" title="Новий проект">
                <div>+</div>
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
                    <div class="operations">
                        <a href="/project/<?php echo $project['id'] ?>" title="Детальна інформація">
                            <i class="far fa-list-alt"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
            
        </div>
    </div>

    <div class="categories wrapperCategories">
        <div>
            <h2 class="page_header">Прайс-лист</h2>
            <div class="list">

                <?php foreach ($priceList as $category): ?>
                    <div class="category category-<?php echo $category['id_category']; ?>">
                        <p class="categoryName">
                            <?php echo $category['category_name']; ?>
                            <span id="category-<?php echo $category['id_category']; ?>" class="expandCategory">&gt;</span>
                        </p>
                        <div class="package hidden">
                            <ul>

                                <?php foreach($category['packages'] as $package): ?>
                                    <li>
                                        <a href="/projects/package/<?php echo $package['id_package']; ?>">
                                            <?php echo $package['package']; ?>
                                        </a>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>

</section>

<?php include_once ROOT.'/views/projects/modals/new-project.php'; ?>

<?php include_once ROOT.'/views/layouts/footer.php'; ?>