<ul id="login">
	<li><?php echo anchor('/', 'Home');?>
    <?php if ($this->authentication->is_signed_in()) : ?>
    <li><?php echo sprintf(lang('website_welcome_username'), '<strong>'.$account->username.'</strong>'); ?></li>
    <li><?php echo anchor('account/account_settings', lang('website_account')); ?></li>
    <li><?php echo anchor('account/sign_out', lang('website_sign_out')); ?></li>
    <?php else : ?>
    <li><?php echo anchor('account/sign_up', lang('website_sign_up')); ?></li>
    <li><?php echo anchor('account/sign_in', lang('website_sign_in')); ?></li>
    <?php endif; ?>
</ul>