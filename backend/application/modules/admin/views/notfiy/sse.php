<?php
ob_end_clean();
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
header('Connection: keep-alive');
//$data_name=$this->session->userdata('id_admin');
$users_message=$this->db->get_where("messages",array("view"=>'0'))->result();
$home_messages=$this->db->get_where("home_messages",array("view"=>'0'))->result();
$main_home_messages=count($home_messages);
$main_message=count($users_message);

$count_notify=(int)$main_home_messages+(int)$main_home_messages;;
echo "data: {$count_notify}\n\n";
sleep(1);
?>
