<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<?php include_http_metas() ?>
<?php include_metas() ?>

<?php include_title() ?>

<link rel="shortcut icon" href="/favicon.ico" />

</head>
<body>

<div id="wrapper">
  <div id="header">
    <?php echo get_partial('global/header'); ?>
  </div>
  
  <div id="menu">
    <?php echo get_partial('global/menu'); ?>
  </div>
  
  <div id="left">
    &nbsp;
  </div>
  
  <?php if( has_slot('right') ): ?>
    <div id="right">
      <?php echo get_slot('right'); ?>
    </div>
  <?php endif; ?>
  
  <div id="content">
    <?php echo $sf_data->getRaw('sf_content') ?>
  </div>
  
  <div id="footer">
    <?php echo get_partial('global/footer'); ?>
  </div>
</div>

</body>
</html>