 <!-- /.col (left) -->
 <div class="col-md-12">

<form action="">
                    <!-- desde aca -->
                    <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label>FILTRAR POR:</label>
                                        <select class="form-control select2 select2-purple" data-dropdown-css-class="select2-purple" style="width: 50%;" id="selecMesa" name="selecMesa">
                                        <option value="0">Seleccione una opcion</option>   
                                            <option value="1">Fecha</option>
                                            <option value="2">Mesa</option>
                                            <option value="3">Comprador</option>
                                            <option value="4">vendedor</option>
                                        
                                        </select>
                                        </div>
                              
                                </div>
                                <!-- /.col -->
                             
                                <!-- /.col -->
                                </div>
                                <!-- /.row -->
<br><br>
                                
                                <div class="row" id="fechas" name="fechas" >
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                            <label>Desde:</label>
                                            <input type="date" name="" id="" style="color: black;" >   

                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                      <!-- /.col -->
                                            <div class="col-12 col-sm-6">
                                                <div class="form-group">
                                                <label>Hasta:</label>
                                                    <input type="date" name="" id="" style="color: black;" > 
                                              
                                                
                                                </div>
                                                <!-- /.form-group -->
                                            </div>
                                <!-- /.col -->
                                </div>

                                <div class="row" id="mesas" id="mesas">

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                            <label>Seleccione la Mesa:</label>                                            

                                            <select class="form-control select2 select2-purple" data-dropdown-css-class="select2-purple" style="width: 40%;">
                                                <option>mesa 1</option>
                                                <option>mesa 2</option>
                                                <option>mesa 3</option>
                                                <option>mesa 4</option>
                                                <option>mesa 5</option>
                                                <option>mesa 5</option>
                                            </select>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                      <!-- /.col -->
                                          
                                <!-- /.col -->
                                </div>

                                <div class="row" id="comprador" name="comprador">

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                            <label>Seleccione Comprador:</label>                                            
                                            <select class="form-control select2 select2-purple" data-dropdown-css-class="select2-purple" style="width: 40%;">
                                                <option>ximena</option>
                                                <option>Carolina</option>
                                                <option>telma</option>
                                           
                                            </select>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                      <!-- /.col -->
                                          
                                <!-- /.col -->
                                </div>
                                <div class="row" id="vendedor" name ="vendedor">

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                            <label>Seleccione Vendedor:</label>

                                            <select class="form-control select2 select2-purple" data-dropdown-css-class="select2-purple" style="width: 40%;">
                                                <option>Daniela</option>
                                                <option>Carlos</option>
                                                <option>DAniela</option>
                                                <option>Vanesa</option>
                                                <option>Ariel</option>
                                                <option>Marco</option>
                                            </select>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                      <!-- /.col -->
                                          
                                <!-- /.col -->
                                </div>

<br><br>
                                <div>
                              

                                <button id="formReporte" name="formReporte" type="button" class="btn btn-block bg-gradient-secondary btn-sm">BUSCAR</button>

                                </div>
                                </form>
                                <!-- /.row -->
      </div>
                    <!-- asta aca -->
          
            <!-- /.card -->

          
            <!-- /.card -->
            <br>

          
          </div>
          <!-- /.col (right) -->
            <div class="wrapper">
            <div class="card">
                        <div class="card-header">
                            <h3 style="color: black; class="card-title">Reporte general</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="color: black;">
                            <table id="example1" class="table table-bordered table-striped" >
                            <thead>
                            <tr>
                            <th>N°</th>
                                <th>Nombre Comprador</th>
                                <th>Nombre Vendedor</th>

                                <th>mesa</th>
                                <th>Cantidad Sillas</th>
                                <th>Precio Unitario</th>

                                <th>Total Pagado</th>
                                <th>Fecha Venta</th>

                                <th>Evento</th>

                            </tr>
                            </thead>
                            
                            
                            
                            <tbody>
                                        <?php
                                    $indice=1;
                                    //invocaremos a [profesor] q pusimos en el array asociativo $data de profesor.php
                                    foreach ($reporteGeneral-> result() as $row) {
                                        ?>
                                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->nombreComprador;?>
                                                   
                                                </td>
                                                <td><?php echo $row->nombreVendedor;?></td>
                                                <td>
                                                    <?php
                                                    if( $row->mesa==46){
                                                            echo "general";
                                                    }
                                                    else{
                                                        echo $row->mesa;
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php echo $row->Cantidadsillas;?></td> 
                                                <td><?php echo $row->precioxsilla;?> Bs.-</td> 
                                                <td><?php echo $row->precioxsilla  * $row->Cantidadsillas ;?> Bs.-</td> 
                                                <td><?php echo $row->fechaventa;?></td>

                                                <td><?php echo $row->evento;?></td> 
 
                                                

                                              
                                                
                                            </tr>
                        <?php
                        $indice++;
                    }
                    ?>                                            
                                        </tbody>
                                        
                        
                            </tbody>
                            <tfoot>
                            <tr>
                            <th>N°</th>
                                <th>Nombre Comprador</th>
                                <th>Nombre Vendedor</th>

                                <th>mesa</th>
                                <th>Cantidad Sillas</th>
                                <th>Precio Unitario</th>
                                <th>Total Pagado</th>
                                <th>Fecha Venta</th>

                                <th>Evento</th>
                            </tr>
                            </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
</div>
