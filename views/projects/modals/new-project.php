<section class="new_project_wrapper wrapper_modal">
    <div id="new_project" class="wrapperPage modal">
        <h2 class="page_header">
            Новий проект
            <span class="close" onclick="closeModal('.new_project_wrapper')">X</span>
        </h2>
        <form id="new_project_form" action="project/new" method="post">

            <div>
                <p>Домен</p>
                <input type="url" name="domain" required>
            </div>

            <div>
                <p>Пакет</p>
                <select name="package" id="package" required>

                    <?php foreach ($priceList as $category): ?>
                        <?php foreach ($category['packages'] as $package): ?>
                            <option value="<?php echo $package['id_package']; ?>">
                                <?php echo $package['package']; ?>
                            </option>
                        <?php endforeach ?>
                    <?php endforeach ?>

                </select>
            </div>

            <div>
                <p>Відділення</p>
                <div class="screen_input" onclick="showDepartmentsModal('#new_project_form #department');"></div>
                <input id="department" type="text" required>
                <input type="hidden" id="department_id" name="department_id">
            </div>
            
            <div>
                <p>Клієнт</p>
                <div class="screen_input" onclick="showCustomersModal('#new_project_form #customer');"></div>
                <input id="customer" type="text" required>
                <input type="hidden" id="customer_id" name="customer_id">
            </div>

            <button>Зберегти</button>
        </form>
    </div>
</section>

<?php include_once ROOT.'/views/departments/modals/departments-modal-list.php'; ?>
<?php include_once ROOT.'/views/customers/modals/customers-modal-list.php'; ?>

<script>
    $( "#departments_modal .departments_list" ).on( "click", "li", function() {
        let text = $('#'+this.id).text()
        $('#new_project #department').val(text);

        let id = this.id.split('-');
        id = id[id.length - 1];
        $('#new_project #department_id').val(id);

        showDepartmentsModal();
    });

    $( "#customers_modal .customers_list" ).on( "click", "li", function() {
        let text = $('#'+this.id).text()
        $('#new_project #customer').val(text);
        let id = this.id.split('-');
        id = id[id.length - 1];
        $('#new_project #customer_id').val(id);

        showCustomersModal();
    });   

    function showNewProjectModal(){
        $('.new_project_wrapper').toggleClass('active');
    }
</script>