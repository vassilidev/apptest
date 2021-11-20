<?php
if (!empty($_SESSION['error'])) {

    if (is_array($_SESSION['error'])) { ?>
        <div class="alert alert-danger">
            <?php foreach ($_SESSION['error'] as $error) ?>
            <p><?= $error ?></p>
        </div>
    <?php } else { ?>
        <div class="alert alert-danger">
            <?= $_SESSION['error'] ?>
        </div>
    <?php }
    unset($_SESSION['error']);
}
