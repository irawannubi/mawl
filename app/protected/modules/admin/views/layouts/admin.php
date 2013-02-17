<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" media="screen, projection" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div class="admin-side-menu">
		<div class="admin-side-menu-inner">
			<div class="admin-logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
				
			<?php 
			if (!Yii::app()->user->isGuest){
				echo '<div class="admin-logo">Role: '.ucfirst(Yii::app()->user->role).'</div>';
			}
			?>
				
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					//array('label'=>'Admin', 'url'=>array('admin/index')),
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'Admin Home', 'url'=>array('/admin')),
					array('label'=>'Users', 'url'=>array('account/index')),
					array('label'=>'Products', 'url'=>array('product/index')),
					array('label'=>'Sales', 'url'=>array('sale/index')),
					//array('label'=>'Product Categories', 'url'=>array('category/index'), 'visible'=>Yii::app()->user->checkAccess('admin')),
					array('label'=>'Product Categories', 'url'=>array('category/index')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
			
			<div class="clear"></div>
		</div>	
	</div><!-- END .admin-side-menu -->
		
	<div class="admin-main-content">
		<div class="admin-main-content-inner">
			<?php
				$this->beginWidget('zii.widgets.CPortlet', array(
					'title'=>'Operations',
				));
				$this->widget('zii.widgets.CMenu', array(
					'items'=>$this->menu,
					'htmlOptions'=>array('class'=>'operations'),
				));
				$this->endWidget();
			?>
			
			<?php echo $content; ?>
		</div>
	</div>
	
	<div class="clear"></div>
		
</div><!-- END #page -->

</body>
</html>
