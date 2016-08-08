<?php
function buku_tamu_admin(){
    global $wpdb;
    $table = $wpdb->prefix . 'bukutamu';
    $buku_tamu = $wpdb->get_results("SELECT * FROM `$table` ORDER BY `id` DESC");
    echo '
 <div class="wrap">';

echo '<table class="display dataTable wp-list-table widefat">

<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    <th>Date</th>
    <th>Action</th>
  </tr>';
     foreach($buku_tamu as $buku){
echo'
</thead>
<tbody>
<tr>
    <td>'.$buku->id.'</td>
    <td>'.$buku->name.'</td>
    <td>'.$buku->email.'</td>
    <td>'.$buku->message.'</td>
    <td>'.$buku->date.'</td>
    <td><a href="'.admin_url('admin.php?page=delete-tamu&id='.$buku->id).'">Delete</a> | <a href="'.admin_url('admin.php?page=edit-data&id='.$buku->id).'">Edit</a></td>
  </tr>
  </tbody>';
  }
 echo' <tfoot>
  <tr>
  <th scope="col" class="manage-column column-tags">&nbsp;</th>
  <th scope="col" class="manage-column column-tags">&nbsp;</th>
  <th scope="col" class="manage-column column-tags">&nbsp;</th>
  <th scope="col" class="manage-column column-tags">&nbsp;</th>
  <th scope="col" class="manage-column column-tags">&nbsp;</th>
  <th scope="col" class="manage-column column-tags">&nbsp;</th>
  </tr>
  </tfoot>
</table>
</div>';
}
?>