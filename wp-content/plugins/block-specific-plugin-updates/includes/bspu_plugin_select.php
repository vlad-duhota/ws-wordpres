<?php
if (@$_POST['submit-bpu']){
	$blocked_plugins = @join('###',$_POST['block_plugin_updates']);
	update_option('bpu_update_blocked_plugins', $blocked_plugins);
	delete_option('_site_transient_update_plugins');	
	$bspu_save_MSG = 'Updated Succesfully. Please logout and login again to get the proper effect.';
    $bpu_update_blocked_plugins_array   = explode('###',$blocked_plugins);
}
?>

<?php if (!empty($bspu_save_MSG)):?>
	<div class="updated" id="message"><p><?php echo $bspu_save_MSG ?></p></div>
<?php endif; ?>

<table class="wp-list-table widefat fixed bookmarks">
    <thead>
        <tr>
            <th>Select plugin you want to disable from updates</th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td>
			<form method="post" action="">
            
                <?php 
                if (!empty($plugins)){
                foreach ($plugins as $plugin_key_name=>$plugin): ?>
                
                <p><input type="checkbox" class="space-right" name="block_plugin_updates[]" <?php echo in_array($plugin_key_name,$bpu_update_blocked_plugins_array)?'checked="checked"':''; ?> value="<?php echo $plugin_key_name; ?>" />&nbsp;&nbsp;&nbsp;<?php echo $plugin['Name']; ?></p>
                <?php endforeach; 
                } else { ?>
                No Plugin Found

                <?php } ?>
            
            <p class="submit">
            <input type="submit" name="submit-bpu" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
            
</td>
</tr>
</tbody>
</table><br/>