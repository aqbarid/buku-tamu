<?php
function delete_data(){
    @$id = $_GET['id'];
    if(!empty($id)){
        global $wpdb;
                $table = $wpdb->prefix . 'bukutamu';
                $delete = $wpdb->delete ($table, array ('ID' => $id));
            if($delete){
                	echo "<meta http-equiv=\"refresh\" content=\"0; URL='".admin_url('admin.php?page=dash-bukutamu')."'\"/>";
		}else{
			echo "<meta http-equiv=\"refresh\" content=\"0; URL='".admin_url('admin.php?page=dash-bukutamu')."'\"/>";
		}
	}else{
			echo "<meta http-equiv=\"refresh\" content=\"0; URL='".admin_url('admin.php?page=dash-bukutamu')."'\"/>";
	}
}
?>