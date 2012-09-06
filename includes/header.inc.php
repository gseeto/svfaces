<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=<?php _p(QApplication::$EncodingType); ?>" />
<?php if (isset($strPageTitle)) { ?>
		<title><?php _p($strPageTitle); ?></title>
<?php } ?>
		<style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	</head><body><div class="container">
<?php $this->RenderBegin(); ?>
		
<?php if (QApplication::$Login != null) { ?>
	<img class="logo" src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/logo.png" width="1000px" />
	<div class="status">
		Welcome, <strong><?php _p(QApplication::$Login->__get('Username')); ?></strong>
		&nbsp;|&nbsp;
		<?php _p(QDateTime::Now()->ToString('DDDD, MMMM D, YYYY')); ?>
		&nbsp;|&nbsp;
		<a href="/logout/" title="Log Out of SVFaces">Logout</a>
		<br/>
		<span class="subhead">You are logged in as a <strong>"role" </strong></span><br/>
	</div>
<?php }  ?>

