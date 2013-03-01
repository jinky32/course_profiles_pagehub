		<header id="main">
			<div id="logo"></div>
		</header>
		<section id="user-links">
			<?php echo sprintf(lang('cp_logged_in_welcome'), $user->display_name); ?> <?php echo anchor('admin/logout', lang('cp_logout_label')); ?>
		</section>