<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- Always force latest IE rendering engine & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo lang('cp_admin_title').' - '.$template['title'];?></title>
	
	<base href="<?php echo base_url(); ?>" />
	
	<!-- Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<!-- Grab Google CDNs jQuery, fall back if necessary -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo js_path('jquery/jquery.min.js'); ?>">\x3C/script>')</script>
	
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

	<?php file_partial('metadata'); ?>
</head>

<body>
<noscript>
	<span class="noscript">PyroCMS requires that JavaScript be turned on for many of the functions to work correctly. Please turn JavaScript on and reload the page.</span>
</noscript>
<div id="page-wrapper" style="padding-bottom:40px !important;">
	<section id="sidebar" dir=<?php $vars = $this->load->_ci_cached_vars; echo $vars['lang']['direction']; ?>>
<?php file_partial('header'); ?>
<?php file_partial('navigation'); ?>
<!--
		<div id="lang-select">
		<form action="<?php echo current_url(); ?>" id="change_language" method="get">
				<select name="lang" onchange="this.form.submit();">
					<option value="">-- Select Language --</option>
			<?php foreach($this->config->item('supported_languages') as $key => $lang): ?>
		    		<option value="<?php echo $key; ?>" <?php echo CURRENT_LANGUAGE == $key ? 'selected="selected"' : ''; ?>>
						<?php echo $lang['name']; ?>
					</option>
        	<?php endforeach; ?>
	        	</select>

		</form>
		</div>
-->
		<footer>
			Rendered in {elapsed_time} sec. using {memory_usage}.
		</footer>
	</section>
	<section id="content-wrapper">
		<header id="page-header">
			<h1><?php echo $module_details['name'] ? anchor('admin/' . $module_details['slug'], $module_details['name']) : lang('cp_admin_home_title'); ?></h1>
			<p><?php echo $module_details['description'] ? $module_details['description'] : ''; ?></p>
			<?php if($module_details['slug']): ?>
				<p id="page-header-help"><?php echo anchor('admin/help/'.$module_details['slug'], '?', array('title' => lang('help_label').'->'.$module_details['name'], 'class' => 'modal')); ?></p>
			<?php endif; ?>
		</header>

			<?php template_partial('shortcuts'); ?>

			<?php template_partial('filters'); ?>

			<?php file_partial('notices'); ?>

		<div id="content">
			<?php echo $template['body']; ?>
		</div>
	</section>
</div>

<div id="geoaps-footer" style="width:100%; ">
    <a href="http://geoaps.com"><img src="<?php echo base_url();?>system/cms/themes/admin_theme/img/admin/geoaps-logo.png" alt="" /></a>
</div>
<style type="text/css">
#geoaps-footer{
 position:fixed; bottom:0px; right:0px;
 /* background: url('<?php echo base_url(); ?>system/cms/themes/admin_theme/img/admin/bg.png') repeat-x top left #424242; */
 background-color:#424242;
 width:100%;
 height:40; max-height:40px;
 padding-top:1px;
 text-align:right;
}
</style>

</body>
</html>