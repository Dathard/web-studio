<section class="new_customer_wrapper wrapper_modal">
    <div id="new_customer" class="wrapperPage modal">
        <h2 class="page_header">
            Новий клієнт
            <span class="close" onclick="closeModal('.new_customer_wrapper')">X</span>
        </h2>
        <form id="new_customer_form" action="customer/new" method="post">

            <div>
                <p>Відділення</p>
                <div class="screen_input" onclick="showDepartmentsModal('#new_project_form #department');"></div>
                <input id="department" type="text" required>
                <input type="hidden" id="department_id" name="department_id">
            </div>

            <div>
                <p>Прізвище</p>
                <input type="text" name="last_name" required>
            </div>

            <div>
                <p>Ім'я</p>
                <input type="text" name="name" required>
            </div>

            <div>
                <p>Ім'я по батькові</p>
                <input type="text" name="surname" required>
            </div>

            <div>
                <p>Email:</p>
                <input type="email" name="email" required>
            </div>
            
            <div>
                <p>Phone:</p>
                <input id="customer_phone" type="text" name="phone">
            </div>

            <button>Зберегти</button>
        </form>
    </div>
</section>

<?php include_once ROOT.'/views/departments/modals/departments-modal-list.php'; ?>

<script>
    $( "#departments_modal .departments_list" ).on( "click", "li", function() {
        let text = $('#'+this.id).text()
        $('#new_customer #department').val(text);

        let id = this.id.split('-');
        id = id[id.length - 1];
        $('#new_customer #department_id').val(id);

        showDepartmentsModal();
    });

    window.addEventListener("DOMContentLoaded", function() {
        function setCursorPosition(pos, elem) {
            elem.focus();
            if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
            else if (elem.createTextRange) {
                var range = elem.createTextRange();
                range.collapse(true);
                range.moveEnd("character", pos);
                range.moveStart("character", pos);
                range.select()
            }
        }

        var is_del = false;
        var is_back = false;
        function mask(event) {
            var curent_position = -1;
            if(event.type == "keyup"){
                curent_position = this.selectionStart;
            }
            var matrix = "(___) ___ ____",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, "");
            if (def.length >= val.length) val = def;
            this.value = matrix.replace(/./g, function(a) {
                return /[_\d]/.test(a) && i <= val.length ? val.charAt(i++) : i < val.length ? a : i++ == 6 && val.length == 4 && event.keyCode !=8 && event.keyCode !='' ? ")" : ""
            });
            is_back = is_del = false;
            if(event.keyCode == 8) is_back = true;
            else if(event.keyCode == 46) is_del = true;
            if (event.type == "blur") {
                if (this.value.length == 2) this.value = "";
            } else if(curent_position != -1){
                if(is_del || is_back){
                    setCursorPosition(curent_position, this);
                }
            } else if(event.type == "focus") setCursorPosition(this.value.length, this);
        };
        var input = document.querySelector("#customer_phone");
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keyup", mask, false);
    });


    function showNewCustomerModal(){
        $('.new_customer_wrapper').toggleClass('active');
    }
</script>