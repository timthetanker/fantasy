<?php
$action = $this->getAction();
print $action;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/public/style.css" media="all" />
    <title><?php echo isset($this->page_title) ? $this->page_title : "Welcome to my site"; ?></title>
</head>
<body>
<style>

</style>
<nav>
    <ul>
        <!--You want to get the value of action controller to display .active / .current page's css property
        Generally you want to go by the controller name, as each menu item is a @controller property class.-->
        <?php
        //An alternative way is ($this->view_file=='home\index') ? 'class=active' : ''; ?
        ?>
        <li><a href="/home/index" <?php echo ($action=='index' ? 'class=active' : ''); ?>>Home</a></li>
        <li><a href="/home/aboutUs/" <?php echo ($action=='aboutUs' ? 'class=active' : ''); ?>>About</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

</nav>

<?php
#var_dump($this);
