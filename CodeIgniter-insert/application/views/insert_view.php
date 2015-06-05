<html>
     <head>
       
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
       // <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
   
        <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'/>
<link  rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    </head>
    <body>
        <?php
        if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
        }
        ?>  
        <?php
        if (isset($message_display)) {
            echo "<div class='message'>";
            echo $message_display;
            echo "</div>";
        }
        ?>  
        <div id="main">

           







            <div id="login">
                <h2>Login</h2>
                <hr/>
                <?php echo form_open('user_authentication/user_login_process'); ?>
                <?php
                echo "<div class='error_msg'>";
                if (isset($error_message)) {
                    echo $error_message;
                }
                echo validation_errors();
                echo "</div>";
                ?>
                <label>UserName  :</label>
                <input type="text" name="username" id="name" placeholder="username"/><br /><br />
                <label>Password  :</label>
                <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
                <input type="checkbox" name="remember_me"/> Remember Me<br/><br />
                <input type="submit" value=" Login " name="submit"/><br />
                <?php echo form_close(); ?>
            </div>
           

        
        
    <div id="register">
        


   <?php echo form_open('insert_ctrl'); ?>
            <h1>Registration form</h1><hr/> 
            <?php if (isset($message)) { ?>
                <CENTER><h3 style="color:red;">Data inserted successfully</h3></CENTER><br>
            <?php } ?>
                <?php echo form_label(' Name :'); ?> <?php echo form_error('dname'); ?><br />
            <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br />

            <?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?><br />
            <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br />

            <?php echo form_label('Contact No :'); ?> <?php echo form_error('dmobile'); ?><br />
            <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile')); ?><br />

            <?php echo form_label('Address :'); ?> <?php echo form_error('daddress'); ?><br />
            <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br />

            <?php echo form_label('Password :'); ?> <?php echo form_error('dpassword'); ?><br />
            <?php echo form_input(array('id' => 'dpassword', 'name' => 'dpassword')); ?><br />

            <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
            <?php echo form_close(); ?><br/>
           </div>

            </div>
        
    </body>
</html>
