<?php if (isset($_SESSION['status'])) { ?>

<!-- Notification div -->
<div class="col-sm-12 alert alert-<?= $_SESSION['color']; ?> text-dark fs-bold alert-dismissible m-auto p-2">
    <i class="bi bi-gear me-1"></i>
    <span style="font-size: 12px" class=""> <?= $_SESSION['status']; ?> <span>
    <!-- Button to close/Dismiss the alert -->
    <button class="btn-close pt-3 ms-2" type="button" aria-label="close" data-bs-dismiss="alert"></button>
</div>
<?php } unset($_SESSION['status']); ?>