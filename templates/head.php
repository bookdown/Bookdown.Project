<head>
<?php
    $this->title()->set($this->page->getTitle());
    $this->styles()->add('/style.css');

    echo $this->title();
    echo $this->styles();
 ?>
</head>
