<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?php echo $data["titulo"]; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">.
        <?php error_reporting(0);?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="index.php?controller=User&action=registrar" method="POST" autocomplete="off" enctype="multipart/form-data">
                                <div class="form-group row justify-content-center">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nombres</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" name="txtNombres" value="<?php echo $_REQUEST["txtNombres"]?>">
                                        <?php if (isset($data["errores"]["nombres"])) : ?>
                                            <div style="color:red">
                                                <?php echo $data["errores"]["nombres"]?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                    <div>
                                    <label for="lblTDocumento" class="form-label">Tipo Documento:</label>
                                        <div class="col-md-5">
                                            
                                            <select name="cboTDocumento" id="cboTDocumento" class="form-select">
                                                <option value="1">DNI</option>
                                                <option value="2">Pasaporte</option>
                                                <option value="3">Carnet de extranjeria</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="lblNDocumento" class="form-label">Num. Documento</label>
                                            <input type="text" class="form-control" name="txtNDocumento" id="txtNDocumento">
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-11">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Email:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="txtEmail" value="<?php echo $_REQUEST["txtEmail"]?>">
                                            <?php if (isset($data["errores"]["email"])) : ?>
                                                <div style="color:red">
                                                    <?php echo $data["errores"]["email"]?>
                                                </div>
                                             <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-7 row py-2">
                                        <label for="lblCategoria" class="col-sm-2 col-form-label">Sexo:</label>
                                        <div class="col-sm-10 py-2">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="crdCategoria" id="crdCategoria" value="1" checked>
                                                <label class="form-check-label" for="lblDTC">M</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="crdCategoria" id="crdCategoria" value="2">
                                                <label class="form-check-label" for="lblDTP">F</label>
                                             </div>
                                        </div>
                                     </div>
                                    <div class="col-md-6">
                                        <label for="lblNDocumento" class="form-label">numero telefono</label>
                                        <input type="text" class="form-control" name="txtNDocumento" id="txtNDocumento">
                                    </div>
                                
                                    <div class="form-group row justify-content-center">
                                        <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña:</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="txtPassword" value="<?php echo $_REQUEST["txtPassword"]?>">
                                            <?php if (isset($data["errores"]["pass"])) : ?>
                                                <div style="color:red">
                                                    <?php echo $data["errores"]["pass"]?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-center">
                                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-5">
                                        <a href="index.php?c=UsuarioController" class="btn btn-secondary">CANCELAR REGISTRO</a>
                                        <input type="submit" value="REGISTRAR USUARIO" class="btn btn-success" name="btnEnviar">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      
        </div>
    </div>

</div>