<?php

use krist\phpmvc\form\TextAreaField;

$this->title = 'Contact';

?>

<h1>Contact</h1>

<?php $form = \krist\phpmvc\form\Form::begin('', 'post') ?>
<?php echo $form->field($model, 'subject') ?>
<?php echo $form->field($model, 'email') ?>
<?php echo new TextAreaField($model, 'body') ?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \krist\phpmvc\form\Form::end(); ?>
