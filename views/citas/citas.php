<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-4">
                    <h1 class="m-0"><?php echo $data["titulo"]; ?></h1>
                </div><!-- /.col -->

                <div class="col-sm-4">
                    <?php
                    if (isset($_SESSION["mensaje"])) : // validamos si la variable mensaje de tipo sessión existe con el metodo isset()
                    ?>

                        <div id="alert-msj" class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong><?php echo $_SESSION["mensaje"]; ?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <script>
                            setTimeout(function() {
                                $('#alert-msj').fadeOut('fast');
                            }, 3000); // duración del alert. En este caso dura solo 3 segundos.
                        </script>
                    <?php unset($_SESSION["mensaje"]);
                    endif;   // con unset limipamos los datos de las variables de tipo session
                    ?>
                </div>
                <div class="col-sm-4">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?controller=citas&action=nuevo" class="btn btn-success">NUEVO REGISTRO</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover " id="tbl-Usuarios">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>modo</th>
                                            <th>paciente</th>
                                            <th>medico</th>
                                            <th>fecha_res</th>
                                            <th>horario</th>
                                            <th>estado</th>
                                            <th>fecha_edicion</th>
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($data["resultado"] as $row) : ?>
                                            <tr>
                                                <td> <?php echo $row["modo"]; ?></td>
                                                <td> <?php echo $row["id_paciente"]; ?></td>
                                                <td> <?php echo $row["id_medico"]; ?></td>
                                                <td> <?php echo $row["fecha_registro"]; ?></td>
                                                <td> <?php echo $row["horario"]; ?></td>
                                                <td> <?php echo $row["estado"]; ?></td>
                                                <td> <?php echo $row["updated"]; ?></td>
                                                <td> <a href="index.php?c=UsuarioController&a=verUsuario&id=<?php echo $row["id"]; ?>" class="btn btn-xs btn-warning"><i class="fas fa-user-edit"></i></a>
                                                    <a href="index.php?c=UsuarioController&a=eliminar&id=<?php echo $row["id"]; ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>

                                </table>
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>