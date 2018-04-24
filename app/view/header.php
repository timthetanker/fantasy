<?php
$action = $this->getAction();
print $action;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/public/style.css" media="all"/>
        <title><?php echo isset($this->page_title) ? $this->page_title : "Welcome to my site"; ?></title>


        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
              crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>

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
        <li><a href="/home/index" <?php echo($action == 'index' ? 'class=active' : ''); ?>>Home</a></li>
        <li><a href="/home/aboutUs/" <?php echo($action == 'aboutUs' ? 'class=active' : ''); ?>>About</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>

</nav>

<?php
#var_dump($this);
