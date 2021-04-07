<?php
/** @var $model \app\models\User */

?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto p-3 border mt-2 shadow">
            <h3 class="text-center">Log in to continue</h3>
            <?php $form = app\core\form\Form::begin("","post") ?>
                <?php echo $form->field($model,'email') ?>
                <?php echo $form->field($model,'password')->passwordField() ?>
                <input type="submit" value="Submit" class="btn btn-primary" name="submit">
            <?php echo app\core\form\Form::end(); ?>
        </div>
    </div>
</div>