<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/build/css/login.css'); ?>">
</head>

<body>
    <div class="loginPage">    
        <header>
            <h2>Car Sales login<a href="<?= base_url(); ?>" class="button"><span>HOME</span></a> </h2>
        </header>
        <?php echo validation_errors(); ?>
        
        <?php echo form_open('login/checklogin'); ?>
            <input placeholder="Email" type="email" name="email">
            <input placeholder="Password" type="password" name="password">
            <section class="links">
                <button class="button"><span>LOGIN ADMIN</span></button>
                <br><br>
            </section>
        </form>
    </div>
</body>
</html>