<?php if (!defined("IN_WALLET")) { die("Auth Error"); } ?>
    <div class="jumbotron">
                <h1><?php echo $lang['PAGE_HEADER']; ?></h1>
                <?php
                if (!empty($error))
                {
                    echo "<p style='font-weight: bold; color: red;'>" . $error['message']; "</p>";
                }
                ?>
                <h3><?php echo $lang['FORM_LOGIN']; ?></h3>
                <form action="index.php" method="POST" class="clearfix">
                    <div class="form-row">
                        <input type="hidden" name="action" value="login" />
                        <div class="col-auto my-1"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                        <div class="col-auto my-1"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                        <div class="col-auto my-1"><input type "text" class="form-control" name="auth" placeholder="<?php echo $lang['FORM_2FA']; ?>"></div>
                        <div class="col-auto ml-md-auto my-1"><button type="submit" class="btn btn-primary h-100"><?php echo $lang['FORM_LOGIN']; ?></button></div>
                    </div>
                </form>
            </div>
                <h3 class="text-white"><?php echo $lang['FORM_CREATE']; ?></h3>
                <form action="index.php" method="POST" class="clearfix">
                    <div class="form-row">
                        <input type="hidden" name="action" value="register" />
                        <div class="col-auto my-1"><input type="text" class="form-control" name="username" placeholder="<?php echo $lang['FORM_USER']; ?>"></div>
                        <div class="col-auto my-1"><input type="password" class="form-control" name="password" placeholder="<?php echo $lang['FORM_PASS']; ?>"></div>
                        <div class="col-auto my-1"><input type="password" class="form-control" name="confirmPassword" placeholder="<?php echo $lang['FORM_PASSCONF']; ?>"></div>
                        <div class="col-auto ml-md-auto my-1" ><button type="submit" class="btn btn-primary h-100"><?php echo $lang['FORM_SIGNUP']; ?></button></div>
                    </div>
                </form>
