<?php
function db_bukutamu() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'bukutamu';
    $sql = "CREATE TABLE $table_name ( `id` INT(12) NOT NULL AUTO_INCREMENT , `name` VARCHAR(40) NOT NULL , `email` VARCHAR(50) NOT NULL , `message` VARCHAR(500) NOT NULL, `date` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`))";
 
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql);
}
?>