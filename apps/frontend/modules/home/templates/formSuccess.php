<?php use_helper('Javascript') ?>
<?php echo form_tag('home/index') ?>
  Find an author by name:
  <?php echo input_auto_complete_tag('author', 'default name',
    'home/autoComplete',
    array('autocomplete' => 'off'),
    array('use_style'    => true)
  ) ?>
  <?php echo submit_tag('Find') ?>
</form>