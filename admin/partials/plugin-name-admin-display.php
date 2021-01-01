<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="jumbotron">
<h1>Wp10 Example Plugin Settings</h1>
<hr>
<form method="post" action="options.php">
<?php
settings_fields( 'wp10customsettings' );
do_settings_sections( 'wp10customsettings' );
?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" name="theemail" value="<?php echo get_option('theemail') ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <?php $selected_option = get_option('thedays'); ?>
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="thedays" id="exampleFormControlSelect1">
      <option <?php if($selected_option == '1'){echo 'selected';} ?>>1</option>
      <option <?php if($selected_option == '2'){echo 'selected';} ?>>2</option>
      <option <?php if($selected_option == '3'){echo 'selected';} ?>>3</option>
      <option <?php if($selected_option == '4'){echo 'selected';} ?>>4</option>
      <option <?php if($selected_option == '5'){echo 'selected';} ?>>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple name="themultiselect" class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
    <button type="submit" class="btn btn-primary mb-2">Submit</button>

</form>
</div>