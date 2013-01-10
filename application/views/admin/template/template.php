<?php
$this->load->view('admin/template/head');
echo "<div id='con'>";
$this->load->view($content);
echo "</div>";
$this->load->view('admin/template/foot');
