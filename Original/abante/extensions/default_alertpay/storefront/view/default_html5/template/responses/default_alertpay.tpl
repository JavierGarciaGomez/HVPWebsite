<?php echo $form['form_open']; ?>
	<?php echo $form['ap_merchant'].$form['ap_amount'].$form['ap_currency'].$form['ap_purchasetype'].$form['ap_itemname'].$form['ap_itemcode'].$form['ap_returnurl'].$form['ap_cancelurl']; ?>
	
	<div class="control-group">
	   <div class="controls">
	   	<button class="btn btn-orange pull-right" title="<?php echo $form['submit']->name ?>" type="submit">
	   	    <i class="icon-ok icon-white"></i>
	   	    <?php echo $form['submit']->name; ?>
	   	</button>
	   	<a id="<?php echo $form['back']->name ?>" href="<?php echo $form['back']->href; ?>" class="btn mr10" title="<?php echo $form['back']->text ?>">
	   	    <i class="icon-arrow-left"></i>
	   	    <?php echo $form['back']->text ?>
	   	</a>
	    </div>
	</div>
</form>