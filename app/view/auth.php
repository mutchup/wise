<?php
    use Wise\Core\Application;
    use Wise\Core\model;
    /** @var model $model */
?>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="User">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
    </symbol>
    <symbol id="Password">
        <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
    </symbol>
    <symbol id="Login">
        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
    </symbol>
</svg>

<div class="col-lg-6 mx-auto mt-5 text-center">
    <div class="card">
        <h5 class="card-header"><?php echo Application::$app->language->dictionary['Lang_PLogin']; ?></h5>
        <div class="card-body">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Username"><svg width="16" height="16" fill="#0d6efd"><use xlink:href="#User"/></svg></span>
                    <input name="Username" type="text" value="<?php echo $model->Username; ?>" class="form-control <?php echo $model->hasError('Username') ? 'is-invalid' : ''; ?>" placeholder="<?php echo Application::$app->language->dictionary['Lang_User']; ?>" aria-label="Username" aria-describedby="Username">
                    <div class="invalid-feedback text-start">
                        <?php echo $model->getFirstError('Username'); ?>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="Password"><svg width="16" height="16" fill="#f00"><use xlink:href="#Password"/></svg></span>
                    <input name="Password" type="password" class="form-control <?php echo $model->hasError('Password') ? 'is-invalid' : ''; ?>" placeholder="<?php echo Application::$app->language->dictionary['Lang_Pass']; ?>" aria-label="Password" aria-describedby="Password">
                    <div class="invalid-feedback text-start">
                        <?php echo $model->getFirstError('Password'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary"><svg width="16" height="16" fill="#FFF"><use xlink:href="#Login"/></svg> <?php echo Application::$app->language->dictionary['Lang_Login']; ?></button>
            </form>
        </div>
    </div>
</div>
