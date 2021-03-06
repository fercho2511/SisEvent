
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Editar
        <small>Usuario</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <?php
                                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infousuario-> result() as $usuario) {
                        ?>

                        <form action="<?php echo base_url();?>index.php/cliente/actualizarCliente" method="POST" >
                            

                        <input type="hidden" value="<?php echo $usuario->idUsuario;?>" name="idCliente", id="idcliente">
                            <div class="form-group <?php echo form_error("nombre") != false ? 'has-error':'';?>">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $usuario->nombres;?>" required   >
                                <!-- <?php echo form_error("nombre","<span class='help-block'>","</span>");?> -->
                            </div>
                            <div class="form-group <?php echo form_error("nombre") != false ? 'has-error':'';?>">
                                <label for="nombre">Apellido Paterno:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $usuario->apellido1;?>" required >
                                <!-- <?php echo form_error("nombre","<span class='help-block'>","</span>");?> -->
                            </div>
                            <div class="form-group <?php echo form_error("nombre") != false ? 'has-error':'';?>">
                                <label for="nombre">Apellido Materno:</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $usuario->apellido2;?>" required >
                                <!-- <?php echo form_error("nombre","<span class='help-block'>","</span>");?> -->
                            </div>
                         
                            <div class="form-group <?php echo form_error("numero") != false ? 'has-error':'';?>">
                                <label for="numero">C.I.:</label>
                                <input type="text" class="form-control" id="ci" name="ci" required placeholder="Ingrese C.I." value="<?php echo $usuario->ci;?>"  >
                                <!-- <?php echo form_error("numero","<span class='help-block'>","</span>");?> -->
                            </div>
                            
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Ingrese Telefono" value="<?php echo $usuario->telefono;?>"   >
                            </div>
                            <div class="form-group">
                                <label for="direccion">Correo:</label>
                                <input type="text" class="form-control" id="correo" name="correo"  placeholder="Ingrese Correo" value="<?php echo $usuario->correo;?>"  >
                            </div>

                          
                            
                            <div class="form-group">
                                <button class="btn btn-primary btn-flat" type="button" onclick="history.back()" name="volver atr??s" title="Cancelar" > Cancelar</span> </button>
                                                
                               

                                <button type="submit" class="btn btn-primary btn-flat">Guardar</button>
                            </div>
                            <?php
                                            $indice++;
                                        }
                                        ?> 
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
