<?php
// default library templates
$library = dirname(__DIR__) . "/vendor/bookdown/bookdown/templates";

// project-specific templates
$project = __DIR__;

// register the templates
$templates = $this->getViewRegistry();
$templates->set("head", "{$project}/head.php");
$templates->set("body", "{$library}/body.php");
$templates->set("core", "{$library}/core.php");
$templates->set("navheader", "{$project}/navheader.php");
$templates->set("navfooter", "{$project}/navfooter.php");
$templates->set("toc", "{$library}/toc.php");
?>
<html>
<?php echo $this->render("head"); ?>
<?php echo $this->render("body"); ?>
</html>
