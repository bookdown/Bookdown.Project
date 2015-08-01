<?php  
// default library templates
$library = dirname(__DIR__) . "/vendor/bookdown/bookdown/templates";

// project-specific templates
$project = __DIR__;
$arr = explode("/", $project);
$new = array_slice($arr, -2);
$newpath = implode("/", $new);
?>  
<head>
    <title><?php echo $this->page->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo $newpath ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
