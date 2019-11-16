<?php include_once ROOT.'/views/layouts/header.php'; ?>

<?php include_once ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page">
    <div id="price-list" class="wrapperPage">
        <h2 class="page_header">Прайс-лист</h2>
        <div class="table">

            <?php foreach($priceList as $category): ?>
                <div class="category category-<?php echo $category['id_category']; ?>">
                    <h2>
                        <?php echo $category['category_name']; ?>
                        <span id="category-<?php echo $category['id_category']; ?>" class="expandCategory">&gt</span>
                    </h2>

                    <?php foreach($category['packages'] as $package): ?>
                        <div class="row package">
                            <div class="name">
                                <p><?php echo $package['package']; ?></p>
                            </div>
                            <div class="price">
                                <p><?php echo $package['price']; ?>$</p>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            <?php endforeach ?>

        </div>
    </div>
</section>

<?php include_once ROOT.'/views/layouts/footer.php'; ?>