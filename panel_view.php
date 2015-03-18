<?php $this->load->view('includes/header.php'); ?>
<?php
$form_panel =   array('name'=>'frm_panel','id'=>'frm_panel','method'=>'post');
//echo form_open('',$form_panel); ?>
<?php $this->load->view('includes/menu_barra.php'); ?>
<div id="contenido_panel">
    <?php 
    if($contenido){
        $this->load->view($contenido);
    }
    ?>
</div>
<?php //echo form_close(); ?>
<?php $this->load->view('includes/footer.php'); ?>