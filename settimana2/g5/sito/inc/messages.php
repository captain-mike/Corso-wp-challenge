<div class="row">
    <div class="col">
        <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger">
            <?= $_GET['error'] ?>
        </div>
        <?php endif; ?>

        <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">
            <?= $_GET['success'] ?>
        </div>
        <?php endif; ?>
    </div>
</div>