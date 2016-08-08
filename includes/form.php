<?php
function buku_tamu_form(){
	echo ' 
	<form method="post" action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '">
	Name :<br>
	<input placeholder="Nama Lengkap" type="text" name="cf-name"><br>
	Email :<br>
	<input placeholder="Email" type="text" name="cf-email"><br>
	Message : <br>
	<textarea placeholder="Pesan" name="cf-message" cols="30" rows="10"></textarea>
	<button type="submit" name="cf-submit" >Submit</button>
	</form>
	';
}
?>