<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link('cakequote', '/'); ?></h1>
			<h2><?php echo $me['username']; ?></h2>
		</div>
		 <?php 
 	
  if (isset($me['id']['Group'])) {

        echo '<div id="connection">';
 	 
        echo $this->Html->link('Se Déconnecter', '/users/logout', array('class'=>'bouton'));
 	 	
        echo '</div>';
 	
     }
 
     else{
 	 	
        echo '<div id="connection">';
 	
       echo $this->Html->link('Inscription', '/users/add');
 	        echo'  ';
 	 
        echo $this->Html->link('Se connecter', '/users/login'); 
 	 	
       echo '</div>';
 	       }
 	 
      
 	 
       ?>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			coded with love
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
