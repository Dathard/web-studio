<section class="new_category_wrapper wrapper_modal">
    <div id="new_category" class="wrapperPage modal">
        <h2 class="page_header">
            Нова категорія
            <span class="close" onclick="closeModal('.new_category_wrapper')">X</span>
        </h2>

        <form id="new_category_form" action="price-list/new-category" method="post">

            <div>
                <p>Назва категорії</p>
                <input type="text" name="category_name" required>
            </div>

            <button>Зберегти</button>
        </form>

    </div>
</section>

<script>  
    function showNewCategoryModal(){
        $('.new_category_wrapper').toggleClass('active');
    }
</script>