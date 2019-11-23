<div id="row_<?php echo $personnelData['id'] ?>" class="row">
    <div class="full-name">
        <p><?php echo $personnelData['full-name']; ?></p>
    </div>
    <div class="position">
        <p><?php echo $personnelData['position']; ?></p>
    </div>
    <div class="operations">
        <a href="/personnel/<?php echo $personnelData['id']; ?>" title="Детальна інформація">
            <i class="far fa-address-card"></i>
        </a>
    </div>
</div>