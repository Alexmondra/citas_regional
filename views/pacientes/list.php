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
                        <li class="breadcrumb-item"><a href="index.php?controller=paciente&action=agregar" class="btn btn-success">NUEVO REGISTRO</a></li>
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
                                            <th>Apellido Paterno</th>
                                            <th>Apellido Materno</th>
                                            <th>Nombre</th>
                                            <th>Fecha de Nacimiento</th>
                                            <th>Sexo</th>
                                            <th>Estado Civil</th>
                                            <th>Numero de Documento</th>
                                            <th>Direccion</th>
                                            <th>Telefono</th>
                                            <th>Email</th>
                                            <th>Ocupacion</th>
                                            <th>Persona Responsable</th>
                                            <th>Alergiasl</th>
                                            <th>Intervenciones Quirurgicas</th>
                                            <th>Vacunas completas</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <?php foreach ($data["resultado"] as $paciente) : ?>
                                                <tr>
                                                    <td><?php echo $paciente["apellido_paterno"]; ?></td>
                                                    <td><?php echo $paciente['apellido_materno']; ?></td>
                                                    <td><?php echo $paciente['nombre']; ?></td>
                                                    <td><?php echo $paciente['fecha_nacimiento']; ?></td>
                                                    <td><?php echo $paciente['sexo']; ?></td>
                                                    <td><?php echo $paciente['estado_civil']; ?></td>
                                                    <td><?php echo $paciente['numero_documento']; ?></td>
                                                    <td><?php echo $paciente['direccion']; ?></td>
                                                    <td><?php echo $paciente['telefono']; ?></td>
                                                    <td><?php echo $paciente['email']; ?></td>
                                                    <td><?php echo $paciente['ocupacion']; ?></td>
                                                    <td><?php echo $paciente['persona_responsable']; ?></td>
                                                    <td><?php echo $paciente['alergias']; ?></td>
                                                    <td><?php echo $paciente['intervenciones_quirurgicas']; ?></td>
                                                    <td><?php echo $paciente['vacunas_completas']; ?></td>
                                                    <td>
                                                        <a href="index.php?action=edit&id=<?php echo $paciente['id']; ?>">Editar</a>
                                                        <a href="index.php?action=delete&id=<?php echo $paciente['id']; ?>">Eliminar</a>
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