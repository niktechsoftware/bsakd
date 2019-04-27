<?php

$this->load->view('top/headercss');
$this->load->view('bodytop/header');
$this->load->view($page);
$this->load->view('bodybottom/footer');
$this->load->view('bottom/footerjs');

?>