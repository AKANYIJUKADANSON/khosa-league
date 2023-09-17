<?php if (isset($_SESSION['status'])) { ?>

<!-- Notification div -->
<div class="col-md-12 alert alert-success alert-dismissible m-auto mt-5">
    <h5> <?= $_SESSION['status']; ?> </h5>
    <!-- Button to close/Dismiss the alert -->
    <button class="btn-close" type="button" aria-label="close" data-bs-dismiss="alert"></button>
</div>
<?php } unset($_SESSION['status']); ?>