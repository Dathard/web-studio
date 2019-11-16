<section id="navigation">
    <nav class="sidebar">
        <div class="sidebar-head">
            <h3>
                <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                <span class="hide-menu">Навігація</span>
            </h3> 
        </div>
        <div id="menu">
            <div class="projects <?php echo($page == 'projects' ? 'active' : ''); ?>">
                <a href="/projects">
                    <span><i class="fas fa-list"></i></span>
                    <span class="hide-menu" style="min-width: 130px;">Проекти</span>
                </a>
            </div>
            <div class="price-list <?php echo($page == 'price-list' ? 'active' : ''); ?>">
                <a href="/price-list">
                    <span><i class="fas fa-money-check-alt"></i></span>
                    <span class="hide-menu" style="min-width: 130px;">Прайс-лист</span>
                </a>
            </div>
            <div class="customers <?php echo($page == 'customers' ? 'active' : ''); ?>">
                <a href="/customers">
                    <span><i class="far fa-id-card"></i></span>
                    <span class="hide-menu" style="min-width: 130px;">Клієнти</span>
                </a>
            </div>
            <div class="departments <?php echo($page == 'department' ? 'active' : ''); ?>">
                <a href="/departments">
                    <span><i class="fas fa-city"></i></span>
                    <span class="hide-menu" style="min-width: 130px;">Відділення</span>
                </a>
            </div>
            <div class="personnel <?php echo($page == 'personnel' ? 'active' : ''); ?>">
                <a href="/personnel">
                    <span><i class="far fa-address-card"></i></span>
                    <span class="hide-menu" style="min-width: 130px;">Працівники</span>
                </a>
            </div>
        </div>
    </nav>
    <script type="text/javascript">
        $(".sidebar").mouseover(function() {
            $(".sidebar").addClass("sidebarActive");
        });
        $(".sidebar").mouseout(function() {
            $(".sidebar").removeClass("sidebarActive");
        });
    </script>
</section>