<!DOCTYPE html>

<html <?php language_attributes(); ?> lang="<?php bloginfo('language'); ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<title><?php bloginfo('name'); ?></title>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<nav class="nav-menu">
			<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
			<ul class="nav-links">
				<li><a href="<?php echo esc_url(home_url('/Nous-rencontrer/')); ?>">Nous rencontrer</a></li>
				<?php if (is_user_logged_in()) { ?>
					<li><a href="<?php echo is_user_logged_in() ? esc_url(admin_url()) : ''; ?>">Admin</a></li>
				<?php } ?>
				<li class="active"><a href="<?php echo esc_url(home_url('/commander/')); ?>">Commander</a></li>
			</ul>

			</div>

		</nav>
	</header>

</body>

</html>