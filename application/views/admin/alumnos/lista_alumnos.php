<main class="main-admin">

	<div class="container">
		<div class="col l12 m12 s12 centrado">
			<h4>Lista de Usuarios</h4>
			<br>
            <br>
			<?php if($alumnos != false){ ?>
			<a class="btn botonAdmin btn-warning" style="background-color: #f1692f" href="<?=base_url()?>Administracion/newUser/">Agregar Alumnos</a>
			<br>
			<br>
			<br>
			<div class="transparencia">
			    <table class="table responsive-table table-condensed">
                    <thead>
                        <tr>
                            <th class="center-align">RUT</th> 
                            <th class="center-align">Nombre(s)</th>
                            <th class="center-align">Apellido(s)</th>
                            <th class="center-align">Edad</th>
                            <th class="center-align">Nivel</th>
                            <th class="center-align">Carrera</th>
                            <th class="center-align">Modificar/Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
              <?php foreach($alumnos->result() as $row){
					?>
                        <tr>
                            <th class="center-align"><?= $row->rut;?></th>
                            <th class="center-align"><?= $row->nombre; ?></th>
                            <th class="center-align"><?= $row->apellido; ?></th>
                            <th class="center-align"><?= $row->edad;?></th>
                            <th class="center-align"><?= $row->nivel;?></th>
                            <th class="center-align"><?= $row->carrera;?></th>
                            
                            <th style="text-align:center">
                                <a class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-pencil-square-o fa-2x" title="Modificar datos del usuario" aria-hidden="true"></i></a>
                                <!--<input type="button" id ="btnTest" value="Test"/></th>-->
                            <a onclick="return confirm('desea eliminar el usuario?');" class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-trash fa-2x" title="Eliminar el usuario" aria-hidden="true"></i></a>
                            </th>
                        </tr>
              <?php } ?>
                    </tbody>
                </table>
			</div>
			<br><br>
			<a class="btn-admin btn waves-effect waves-light" href="javascript:window.history.back();">Volver</a><br><br>
			<?php }else{  ?> 
			<p style="text-align:center">No existen usuarios para esta empresa hasta el momento, para poder ingresar usuarios a esta empresa haga click en el boton "Agregar Usuario".</p>
			<br>
			<a class="btn botonAdmin btn-warning" style="background-color: #f1692f" href="<?=base_url()?>Administrador/newAlumno">Agregar Usuario</a>
			<?php } ?>

		</div>
	</div>
</main>