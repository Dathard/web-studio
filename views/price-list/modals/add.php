<section class="select_action_wrapper wrapper_modal">
    <div id="select_action" class="wrapperPage modal">
        <h2 class="page_header">
            Оберіть дію
            <span class="close" onclick="closeModal('.select_action_wrapper')">X</span>
        </h2>

        <div>
            <button onclick="showNewCategoryModal();">Нова категорія</button>
            <button onclick="showNewPackageModal();">Новий пакет</button>
        </div>

    </div>
</section>

<script>  
    function showAddModal(){
        $('.select_action_wrapper').toggleClass('active');
    }
</script>

<?php include_once ROOT.'/views/price-list/modals/new-category.php'; ?>
<?php include_once ROOT.'/views/price-list/modals/new-package.php'; ?>