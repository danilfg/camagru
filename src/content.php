<div class="container mt-5">
    <h3 class="mb-5">Gallery</h3>

    <div class="d-flex flex-wrap">
        <?php
        $login = 'danilfg';
        $image = '1';
        for($i = 0; $i < 5; $i++):
        ?>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><?php echo $login ?></h4>
                </div>
                <div class="card-body">
                    <img src="img/<?php echo $image ?>.jpg" alt="from <?php echo $login ?>'s" class="img-thumbnail">
                    <button type="button" class="btn btn-lg btn-block btn-outline-primary">Подробнее</button>
                </div>
            </div>
        <?php endfor;?>
    </div>
</div>