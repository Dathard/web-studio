<section class="new_department_wrapper modal">
    <div id="new_department" class="wrapperPage">
        <h2 class="page_header">
            Нове відділення
            <span class="close" onclick="closeModal('.new_department_wrapper')">X</span>
        </h2>
        <form id="new_department_form" action="department/new" method="post">

            <div>
                <p>Aдреса відділення</p>
                <input type="text" name="address" required>
            </div>
            
            <div>
                <p>Сайт</p>
                <input type="url" name="site" required>
            </div>

            <button>Зберегти</button>
        </form>
    </div>
</section>

<script>
    function showNewDepartmentModal(){
        $('.new_department_wrapper').toggleClass('active');
    }
</script>