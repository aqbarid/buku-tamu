<?php
function edit_form(){
    @$id = $_GET['id'];
    global $wpdb;
    $table = $wpdb->prefix . 'bukutamu';
    $datas = $wpdb->get_results("SELECT * FROM `$table` WHERE `id` = $id");
    echo '<div class="wrap">';
    if(empty($id)){
        echo 'tak ada data yang di edit';
    }else {
        foreach($datas as $data){
            if(isset($_POST['update'])){
                $id = $_POST['cf-id'];
                $name = sanitize_text_field($_POST['cf-name']);
                $email = sanitize_email($_POST['cf-email']);
                $message = esc_textarea($_POST['cf-message']);
                
                global $wpdb;
                $table = $wpdb->prefix . 'bukutamu';
                $update_data = $wpdb->update( $table, 
                array('name' => $name,
                    'email' => $email,
                    'message' => $message),
                    array('id' => $id),
                    array('%s', '%s', '%s'),
                    array('%d'));
                        
                if($update_data){
                    echo "<meta http-equiv=\"refresh\" content=\"0; URL='".admin_url('admin.php?page=dash-bukutamu')."'\"/>";
                }else{
                    echo 'data gagal di update';
                }
            }
            echo '
            <div class="wrap">
            <form method="post" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '">
        	Name :<br>
        	<input value="'.$data->id.'" type="hidden" name="cf-id">
        	<input value="'.$data->name.'" type="text" name="cf-name"><br>
        	Email :<br>
        	<input value="'.$data->email.'" type="text" name="cf-email"><br>
        	Message : <br>
        	<textarea name="cf-message" cols="30" rows="10">'.$data->message.'</textarea>
        	<br>
        	<button type="submit" class="button button-primary" name="update" >Submit</button>
        	</form></div>
        	';
        }
    }
    echo "</div>";
}
?>
