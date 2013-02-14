<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is where hopefully the user model should output.
</p>
<pre>
<?php print_r($user->attributes); ?>
</pre>