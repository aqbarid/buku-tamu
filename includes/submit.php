<?php
function buku_tamu_submit(){
        if(isset($_POST['cf-submit'])){
            $name = sanitize_text_field($_POST['cf-name']);
            $email = sanitize_email($_POST['cf-email']);
            $message = esc_textarea($_POST['cf-message']);
            $date 		= date("d-m-Y");
            
            global $wpdb;
            $table = $wpdb->prefix . 'bukutamu';
            $insert_data = $wpdb->insert($table, array(
                'name' => $name,
                'email' => $email,
                'date' => $date,
                'message' => $message));
                //insert 
                if($insert_data){
                    echo "Sukses Komen";
                }else{
                    echo "gagal";
                }
        }
}
?>