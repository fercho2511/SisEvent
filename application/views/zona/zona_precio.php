

         <div class="row">

<!-- Area Chart -->
<div class="col-xl-2 ">
    <div class="card shadow mb-2">
        <!-- Card Header - Dropdown -->
        <div
            class="card-header py-1 align-items-center justify-content-between">
            <div class="col-sm-14">
                       

                                    <a class="btn btn-outline-primary" href="#" data-toggle="modal" data-target="#logoutModal2">
                                    <i class="fas fa-user-plus"></i>
                                    Agregar Zona
                                    </a>
             </div>
           
        </div>
 

        <!-- asta este punto perteence la imagen del mapa -->
    </div>
</div>


<!-- Content Row -->
<div class="row">

<!-- Content Column -->
<div class="col-lg-6 mb-4">


<div class="col-lg-6 mb-4">

 

</div>
</div>

</div>
<!-- /.container-fluid -->

</div>


<!-- DataTales Example -->
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Zonas Regisradas</h6>
                           
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                             <th>N°</th>
                                            <th>Zona</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>
                                        
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>N°</th>
                                            <th>Zona</th>
                                            <th>Precio</th>
                                            <th>Descripcion</th>
                                            <th>Acciones</th>

                                           
                                        </tr>
                                    </tfoot>

<?php
                                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($zona-> result() as $row) {
                        ?>
                         <tbody>
                                            <tr>
                                                <td><?php echo $indice;?></td>

                                                <td><?php echo $row->zona;?></td> 
                                                <td><?php echo $row->precio;?></td>
                                                <td><?php echo $row->descripcion;?></td>
                                                <td>
                                                <div class="btn-group btn-group-justified" >
                                                <?php
                                                        echo form_open_multipart('zona_pre/modificar')
                                                    ?>
                                   
                                                    <!-- <input type="hidden" name="idZona" value="<?php echo $row->idZona;?>"> -->
                                                    <!-- <button type="submit" class="btn btn-outline-dark" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button> -->
                                                    <a class="btn btn-outline-dark" href="#" data-toggle="modal" data-target="#logoutModal3" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>
                                                    <input type="hidden" name="idZona" value="<?php $idZ;?>">

                                                    </a>
                                                    <?php
                                                        echo form_close();
                                                    ?>
                                                    <!-- probando -->
                                                 
                                                    <!--  -->

                                                <?php
                                                        echo form_open_multipart('zona_pre/eliminarZona')
                                                    ?>
                                                    <input type="hidden" name="idZona" value="<?php echo $row->idZona;?>">
                                                    <button type="submit" class="btn btn-outline-danger " title="Eliminar" >
                                                    <span class="fas fa-trash-alt"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <?php
                                            $indice++;
                                        }
                                        ?> 


                                   
                                        
                                       
                                        
                                   
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>