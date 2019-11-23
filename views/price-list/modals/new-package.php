<section class="new_package_wrapper wrapper_modal">
    <div id="new_package" class="wrapperPage modal">
        <h2 class="page_header">
            Новий пакет
            <span class="close" onclick="closeModal('.new_package_wrapper')">X</span>
        </h2>

        <form id="new_package_form" action="price-list/new-package" method="post">

            <div>
                <p>Категорія</p>
                <select name="category" id="category" required>

                    <?php foreach($priceList as $category): ?>
                        <option value="<?php echo $category['id_category']; ?>">
                            <?php echo $category['category_name']; ?>
                        </option>
                    <?php endforeach ?>

                </select>
            </div>

            <div>
                <p>Назва пекету</p>
                <input type="text" name="package" required>
            </div>

            <div>
                <p>Ціна</p>
                <input type="number" name="price" required>
            </div>

            <button>Зберегти</button>
        </form>

    </div>
</section>

<script>  

    function showNewPackageModal(){
        $('.new_package_wrapper').toggleClass('active');
    }
</script>