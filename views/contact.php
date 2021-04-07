<?php /** @noinspection PhpVoidFunctionResultUsedInspection */
/** @var $this View */
/** @var $model ContactForm */

use tn\phpmvc\form\Form;
use tn\phpmvc\form\TextareaField;
use tn\phpmvc\View;
use app\models\ContactForm;

$this->title = "Contact";

?>
<h3 class="text-center">Contact Us</h3>
<?php $form = Form::begin('','post')?>
<?php echo $form->field($model,'subject') ?>
<?php echo $form->field($model,'email') ?>
<?php echo new TextareaField($model,'body') ?>
<input type="submit" value="send" class="btn btn-primary" name="submit">
<?php echo Form::end()?>
