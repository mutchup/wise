<?php use Wise\Core\Application; ?>
<h2><?php echo Application::$app->language->dictionary['Lang_Profile']; ?></h2>



<div class="col-lg-4 col-sm-12 mb-3">
    <div class="card text-center bg-light">
        <div class="card-body">
            <img src="<?php echo IMG.'profile.png'; ?>" class="rounded-circle me-2" height="120" width="120" alt="...">
            <h5 class="fw-bold">doctor's name</h5>
            <h6 class="text-muted">education specialization</h6>
        </div>
    </div>
</div>
<div class="col-lg-8 col-sm-12 order-5">
    <div class="card bg-light">
        <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary"><?php echo Application::$app->user->getDisplay('Username'); ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6></div>
                    <div class="col-sm-9 text-secondary"><?php echo Application::$app->user->getDisplay('Email'); ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6></div>
                    <div class="col-sm-9 text-secondary"><?php echo Application::$app->user->getDisplay('PhoneNumber'); ?></div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6></div>
                    <div class="col-sm-9 text-secondary"><?php echo Application::$app->user->getDisplay('PhoneNumber'); ?></div>
                </div>
        </div>
    </div>
</div>