<?php
defined('BASEPATH')or exit('No direct script allowed!');
/**
* Developed by Techcoderr Developers
*/

//end of line.
?>
<h3 class="box-title clearfix">
	<?=$page_title ?>
	<div class="pull-right">
		<?=$top_actions ?>
	</div>
</h3>

<div class="panel">

	<div class="panel-body">
		<?=form_open(current_url(),['method'=>'post','id'=>'newCategoryForm']) ?>
		<div class="form-group form-group-lg">
			<label class="control-label" for="name"><?=lang('product_category_name_label') ?>
				<span class="text-danger">*</span></label>
			<?=form_input($category_name)?>
		</div>

		<div class="form-group">
			<label class="control-label" for="description"><?=lang('product_category_description_label') ?></label>
			<?=form_textarea($category_description)?>
		</div>

		<div id="panel_actions">
			<button type="submit" class="btn btn-info btn-sm" name="submit" id="save" value="save">
				<span class="fa fa-check"></span>
				<span class="hidden-xs hidden-sm"><?=lang('btn_save') ?></span></button>

			<button type="submit" class="btn btn-info btn-sm" name="submit" id="saveandclose" value="saveandclose">
				<span class="fa fa-save"></span>
				<span class="hidden-xs hidden-sm"><?=lang('btn_save_and_close') ?></span></button>

			<a href="<?=site_url(previous_url('dashboard',true)) ?>" class="btn btn-default btn-sm">
				<span class="fa fa-close"></span>
				<span class="hidden-xs hidden-sm"><?=lang('btn_cancle') ?></span></a>
			<div class="pull-right">
				<?=$activate ?>
			</div>
		</div>
		<?=form_close() ?>
	</div>
</div>
