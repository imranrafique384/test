<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
   
   <?php
    if($sf_user->isAuthenticated()==true)
   {
	   echo "<br>from template: ".$sf_user->getGuardUser()->getId() ;
	   echo "<br>from template: ".$sf_user->getGuardUser()->getUsername()."<br>" ;
   ?>
   <a href="<?php echo url_for('sf_guard_signout');?>">Sign out</a>
   
    
	<?php 
	} 
	else
	{
	?>
    
    <a href="<?php echo url_for('sf_guard_signin');?>">Login</a>
    <a href="<?php echo url_for('sf_guard_register');?>">Sign Up</a>
    <?php
	}
	?>
	<?php echo $sf_content ?>
  </body>
</html>
