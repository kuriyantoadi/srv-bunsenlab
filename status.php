<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>

<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
    echo "<h3>Info Sistem Operasi</h3>";
        $output = shell_exec('free');
        $os_view = shell_exec('lsb_release -a');
        $os_disk = shell_exec('df -h');
        $os_service = shell_exec('service --status-all | grep +');


        #$apache_status = shell_exec('sudo service apache2 status | grep Active');

        echo "<pre>$os_view</pre>";

        echo "<h3>Info RAM</h3>";
        echo "<pre>$output</pre>";

        echo "<h3>Info Disk</h3>";
        echo "<pre>$os_disk</pre>";

        echo "<h3>Info Service</h3>";
        echo "<pre>$os_service</pre>";

        #echo "<pre>$apache_status</pre>";



    ?>
    </body>
</html>
