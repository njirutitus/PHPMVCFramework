<?php
 /** @var $model \app\models\User */

?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 m-auto p-3 border mt-2 shadow">
            <h3 class="text-center">Create an Account</h3>
            <?php $form = tn\phpmvc\form\Form::begin("","post") ?>
            <div class="row">
                <div class="col"><?php echo $form->field($model,'firstname') ?></div>
                <div class="col"><?php echo $form->field($model,'lastname') ?></div>
            </div>
            <?php echo $form->field($model,'email') ?>
            <?php echo $form->field($model,'password')->passwordField() ?>
            <?php echo $form->field($model,'confirmPassword')->passwordField() ?>
            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
            <?php echo tn\phpmvc\form\Form::end(); ?>
<!--            <form action="" method="post">-->
<!--                <div class="row">-->
<!--                    <div class="col">-->
<!--                        <div class="from-group mb-3">-->
<!--                            <label for="firstname">First Name</label>-->
<!--                            <input name="firstname" id="firstname" type="text" class="form-control">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col">-->
<!--                        <div class="from-group mb-3">-->
<!--                            <label for="lastname">Last Name</label>-->
<!--                            <input name="lastname" id="lastname" type="text" class="form-control">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="from-group mb-3">-->
<!--                    <label for="email">Email</label>-->
<!--                    <input type="email"  id="email" name="email" class="form-control">-->
<!--                </div>-->
<!--                <div class="from-group mb-3">-->
<!--                    <label for="password">Password</label>-->
<!--                    <input type="password"  id="password" name="password" class="form-control">-->
<!--                </div>-->
<!--                <div class="from-group mb-3">-->
<!--                    <label for="confirmpassword">Confirm Password</label>-->
<!--                    <input type="password"  id="confirmpassword" name="confirmPassword" class="form-control">-->
<!--                </div>-->
<!--                <input type="submit" value="Submit" class="btn btn-primary" name="submit">-->
<!--            </form>-->
        </div>
    </div>
</div>
