<?php
ob_end_clean();
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');
//$data_name=$this->session->userdata('id_admin');
$users_message=$this->db->get_where("messages",array("view"=>'0'))->result();
$main_message=count($users_message);
echo "data: {$main_message}\n\n";
sleep(1);
?>
