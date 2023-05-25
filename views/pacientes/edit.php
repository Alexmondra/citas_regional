<!-- views/paciente/edit.php -->

<h1>Editar Paciente</h1>

<!-- Formulario de editar paciente -->
<form method="POST" action="index.php?action=edit">
        <input type="hidden" name="id" value="<?php echo $paciente['id']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['apellido_paterno']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['apellido_materno']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['nombre']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['fecha_nacimiento']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['sexo']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['estado_civil']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['numero_documento']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['direccion']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['teefono']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['email']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['ocupacion']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['persona_responsable']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['alergias']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['intervenciones_quirurgicas']; ?>">
        <input type="hidden" name="id" value="<?php echo $paciente['vacunas_completas']; ?>">
    
    <button type="submit">Guardar</button>
</form>
   
