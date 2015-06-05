<?php
$session_data = $this->session->userdata('logged_in');
?>
<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="profile">
            <?php
            echo "Hello <b id='welcome'><i>" . $session_data['username'] . "</i> !</b>";
            echo "<br/>";
            echo "<br/>";
            echo "You have successfully logged in the Admin Page";
            ?>
        </div>
        <b id="logout"><a href="logout">Logout</a></b>
    </body>
</html>
