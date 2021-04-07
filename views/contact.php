<?php
/** @var $this \app\core\View */
/** @var $model \app\models\ContactForm */

use app\core\form\Form;
use app\core\form\TextareaField;

?>
<div class="container">
            <h3 class="text-center">Contact Us</h3>
            <?php $form = Form::begin('','post')?>
            <?php echo $form->field($model,'subject') ?>
            <?php echo $form->field($model,'email') ?>
            <?php echo new TextareaField($model,'body') ?>

             <input type="submit" value="send" class="btn btn-primary" name="submit">
            <?php echo Form::end()?>
</div>
