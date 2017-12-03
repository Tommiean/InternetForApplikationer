<div class=" ">
    <h2>Login</h2>

    <?php echo validation_errors(); ?>

    <?php echo form_open('users/login'); ?>
        <div class=" ">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username">

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">
            <div class="">
                <button type="submit" class="">Login</button>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>