




  <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span><b>Desarrolado by &copy; FSL </b> 2022</span>
                        <b>Version</b> 1.0
                    </div>
                </div>
            </footer>


            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Abandonar la sesion?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" si desea abandonar la sesion</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>


                    <?php
                                    echo form_open_multipart('usuario/logout');
                                    ?>
                                  <button type="submit" class="btn btn-primary" >SALIR</button>

                                  <!-- <a class="btn btn-primary" >Logout</a> -->
                                    </a>
                                    <?php
                                        echo form_close();
                                    ?>

                </div>
            </div>
        </div>
    </div>


    <!--  desde aca se realizara la venrtana modal pra la venta o reserva  -->
    <div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar venta/reserva</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php
                     echo form_open_multipart('usuario/registrar_venta');
                  ?>
                <div class="chart-pie pt-10 pb-4">
                <input type="text" name="silla" value=" silla 1">

                    <div>

                    <div class="form-group">

                                    <input type="text" class="form-control form-control-user" id="nombre"
                                        placeholder="Nombre">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="apellido"
                                        placeholder="Apellido">
                                </div>
                                    
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="ci"
                                            placeholder="C.I.">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="telefono"
                                            placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="correo"
                                        placeholder="Correo">
                                </div>

                    </div>
                                      
                    <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>


                  
                                  <button type="submit" class="btn btn-primary" >VENTA</button>
                                  <button type="submit" class="btn btn-primary" >RESERVA</button>


                                  <!-- <a class="btn btn-primary" >Logout</a> -->
                                    </a>
                                   

                    </div>
                </div>
                <?php
                                        echo form_close();
                                    ?>

        </div>
    </div>
    <!-- end modal windows -->

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>starbootstrap/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url(); ?>starbootstrap/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url(); ?>starbootstrap/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url(); ?>starbootstrap/js/demo/chart-pie-demo.js"></script>
    <!-- <script src="<?php echo base_url(); ?>starbootstrap/js/get_coordenadas.js"></script> -->

</body>

</html>