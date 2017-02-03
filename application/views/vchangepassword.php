<?=form_open(base_url()."my_account/change_password")?>

<table cellspacing='3' cellpadding='3'>

	<tr><td>
		Current Password <td> <?=form_password(array("name"=>"cur_pw"))?>
		<td> <?=form_error("cur_pw") ?>
	</tr></td>	
	
	<tr><td>
		Pin Code <td> <?=form_password(array("name"=>"pin_code"))?>
		<td> <?=form_error("pin_code") ?>
	</tr></td>
	
	<tr><td>
		New Password <td> <?=form_password(array("name"=>"new_pw"))?>
		<td> <?=form_error("new_pw") ?>
	</tr></td>	
	
	<tr><td>
		Repeat Password <td> <?=form_password(array("name"=>"conf_pw"))?>
		<td> <?=form_error("conf_pw") ?>
	</tr></td>	
	
	<tr> <td colspan='2' align='right'> <input type='submit' name='submit' value='Update Password' /></tr></td>

</table>

<?=form_close()?>