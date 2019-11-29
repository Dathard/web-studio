<?php include_once ROOT.'/views/layouts/header.php'; ?>

<?php include_once ROOT.'/views/layouts/sidebar.php'; ?>

<section class="page">
    <div id="personnel" class="wrapperPage">
        <div class="header">
            <h2 class="page_header">Персонал</h2>
            <div>
                <select name="department" id="department">
                    <option data-url="/personnel/">Усі працівники</option>
                    
                    <?php foreach($departmentsList as $department): ?>
                        <option data-url="/personnel/department/<?php echo $department['id']; ?>"
                            <?php echo ($department['id'] == $idDepartment ? 'selected' : '') ?> >
                            <?php echo $department['address']; ?>
                        </option>
                    <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="table">

                <div class="row show_new_employee_modal" onclick="showNewEmployeeModal();" title="Новий проект">
                    <div>+</div>
                </div>

                <?php foreach($personnelList as $personnel): ?>
                    <div id="row_<?php echo $personnel['id'] ?>" class="row">
                        <div class="full-name">
                            <p><?php echo $personnel['full-name']; ?></p>
                        </div>
                        <div class="position">
                            <p><?php echo $personnel['position']; ?></p>
                        </div>
                        <div class="operations">
                            <a href="/personnel/<?php echo $personnel['id']; ?>" title="Детальна інформація">
                                <i class="far fa-address-card"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </section>

    <?php include_once ROOT.'/views/personnel/modals/new-employee.php'; ?>

    <?php include_once ROOT.'/views/layouts/footer.php'; ?>