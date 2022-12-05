<?php /** @var $exception Exception **/ ?>

<div class="px-4 py-5 text-center">
    <i class="fa-solid fa-exclamation fa-2xl"></i>
    <h1 class="display-5 fw-bold"><?php echo $exception->getCode(); ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo $exception->getMessage(); ?></p>
    </div>
</div>