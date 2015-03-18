<?php $this->load->view('includes/header.php'); ?>
<?php
$form_panel =   array('name'=>'frm_panel','id'=>'frm_panel','method'=>'post');
?>
<?php $this->load->view('includes/menu_barra_apertura.php'); ?>
<div id="contenido_panel">
    <div id="grilla_producto">
    <div id="left_grilla_principal">    
        <?php $this->load->view('principal/opciones_sistema_view.php'); ?>
    </div>
    <div id="right_grilla_principal">
        <?php $this->load->view('principal/form_aperturar_nuevo_caja_view.php'); ?>
    </div>
</div>
    
</div>

<?php $this->load->view('includes/footer.php'); ?>