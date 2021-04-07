<?php
/** @var $this \app\core\View */
/** @var $model \app\models\ContactForm */
?>
<div class="container">
            <h3 class="text-center">Contact Us</h3>
            <?php $form = \app\core\form\Form::begin('','post')?>
            <?php echo $form->field($model,'subject') ?>
            <?php echo $form->field($model,'email') ?>
            <?php echo $form->field($model,'body') ?>

             <input type="submit" value="send" class="btn btn-primary" name="submit">
            <?php echo \app\core\form\Form::end()?>
</div>
