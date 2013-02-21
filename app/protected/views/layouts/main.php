<?php /* @var $this Controller */ ?>
<!DOCTYPE html">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- original stylesheets. gradually take these out -->
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/orig/ie.css" />
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/orig/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/orig/form.css" />
	<!-- end original -->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.scaffolding.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/shop.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container">
	
	<div class="row">
		<div class="span6">
			<div class="header">
				<div class="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
			</div><!-- header -->
		</div>
		
		<div class="span6">
			<div class="header-meta">
				<p>search, shopping bag, souzu rewards</p>
			</div><!-- header -->
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="mainmenu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Admin Home', 'url'=>array('/admin')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
			</div><!-- .mainmenu -->
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<?php echo $content; ?>
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<div class="footer">
				Copyright &copy; by My Company.<br/>
				All Rights Reserved.<br/>
			</div><!-- footer -->
		</div>
	</div>	

</div><!-- page -->

</body>
</html>
