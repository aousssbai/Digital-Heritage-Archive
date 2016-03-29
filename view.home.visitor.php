<?php
?>

    <div class="container">

        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-sm-12">

            <?php
                Alert::displayMessage();
            ?>

            <h1 class="text-center"> Digital Heritage Archive </h1>
            <a href="register.php"><p class="text-center">Click Here to register</p></a>

            <form action="index.php" method="post" id="loginForm">

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" placeholder="Email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="passWord">Password:</label>
                    <input type="password" class="form-control" placeholder="Password" name="passWord" required>
                </div>

                <input type="hidden" name="login" value="111">

                <button type="submit" class="btn btn-primary center-block">Login</button><br>
            </form>

            


        </div>
    </div>
