<div id="row_<?php echo $projectData['id']; ?>" class="row">
    <div class="domain">
        <a href="<?php echo $projectData['domain']; ?>" target="_blank" title="Відкрити в новій вкладці">
            <?php echo $projectData['domain']; ?>
        </a>
    </div>
    <div class="package">
        <p><?php echo $projectData['package']; ?></p>
    </div>
    <div class="price">
        <p><?php echo $projectData['price']; ?>$</p>
    </div>
    <div class="status">
        <p>
            <?php echo $projectData['status'] == 1 ? 'Виконано' : 'Не виконано' ?>
        </p>
    </div>
    <div class="operations">
        <a href="/project/<?php echo $projectData['id'] ?>" title="Детальна інформація">
            <i class="far fa-list-alt"></i>
        </a>
    </div>
</div>