<?php
//NOTE how easy it is to include a file using CONSTANTS
require VIEW . 'header.php';
?>
<h1 style="text-align: center">Hello from View/Home Index file :)</h1>
<style>
    .login-form {
        text-align: center !important;
    }

    .login-text {
        color: red !important;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-xs-12 login-form">
            <form class="form-horizontal" action="" method="POST">
                <fieldset>
                    <h5 class="login-text">Login To Get Started</h5>
                    <div class="control-group">
                        <!-- Username -->
                        <label class="control-label" for="username">Username</label>
                        <div class="controls">
                            <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Password-->
                        <label class="control-label" for="password">Password</label>
                        <div class="controls">
                            <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <!-- Button -->
                        <div class="controls">
                            <button name="submitBtn" class="btn btn-success">Login</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<?php

?>




<?php require VIEW . 'footer.php'; ?>
