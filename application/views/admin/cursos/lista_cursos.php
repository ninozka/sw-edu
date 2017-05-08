<main class="main-admin">

	<div class="container">
		<div class="col l12 m12 s12 centrado">
			<h4>Lista de Usuarios</h4>
			<br>
            <br>
			<?php if($user != false){ ?>
			<a class="btn botonAdmin btn-warning" href="<?=base_url()?>Administrador/newUser/">Agregar Usuario</a>
			<br>
			<br>
			<br>
			<div class="transparencia">
			    <table class="table responsive-table table-condensed">
                    <thead>
                        <tr>
                            <th class="center-align">Nombre(s)</th>
                            <th class="center-align">Apellido(s)</th>
                            <th class="center-align">Correo</th>
                            <th class="center-align">RUT</th>
                            <?php foreach($tipos->result() as $fila){ ?>
                                <th class="center-align"><?=$fila->nombre?></th>
                            <?php } ?>
                            <th style="text-align:center">Modificar</th>
                            <th style="text-align:center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
              <?php foreach($user->result() as $row){
					?>
                        <tr>
                            <th class="center-align"><?= $row->nombre; ?></th>
                            <th class="center-align"><?= $row->apellido; ?></th>
                            <th class="center-align"><?= $row->correo;?></th>
                            <th class="center-align"><?= $row->rut;?></th>
                            <?php
                            $ci = &get_instance();
                            $ci->load->model('Usuarios');
                            $tipos = $ci->Usuarios->getTiposUsers($row->id);
                            if($tipos->num_rows() == 1){
                                $tipo = $tipos->row();
                                if($tipo->tipo_id == 1){
                                    echo '<th class="center-align"><i class="green medium material-icons">done</i></th>
                                          <th class="center-align"><i class="red medium material-icons">not_interested</i></th>';
                                }else{
                                    echo '<th class="center-align"><i class="red medium material-icons">not_interested</i></th>
                                    <th class="center-align"><i class="green medium material-icons">done</i></th>';
                                }
                            }elseif($tipos->num_rows()==2 ){
                                echo '<th class="center-align"><i class="green medium material-icons">done</i></th>
                                <th class="center-align"><i class="green medium material-icons">done</i></th>';
                            }else{
                                echo '<th class="center-align"><i class="red medium material-icons">not_interested</i></th>
                                <th class="center-align"><i class="red medium material-icons">not_interested</i></th>';
                            }
                            ?>

                            <th style="text-align:center">
                                <a class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-pencil-square-o fa-2x" title="Modificar datos del usuario" aria-hidden="true"></i></a>
                            </th>
                            <th style="text-align:center">
                            <a onclick="return confirm('desea eliminar el usuario?');" class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-trash fa-2x" title="Eliminar el usuario" aria-hidden="true"></i></a>
                            </th>
                        </tr>
              <?php } ?>
                    </tbody>
                </table>
			</div>
			<br><br>
			<a class="btn-admin btn waves-effect waves-light" href="javascript:window.history.back();">Volver</a><br><br>
			<?php }else{ $ci = &get_instance();
            $ci->load->model('Encryption');
            $idEmp = $ci->Encryption->encode($idEmp); ?>
			<p style="text-align:center">No existen usuarios para esta empresa hasta el momento, para poder ingresar usuarios a esta empresa haga click en el boton "Agregar Usuario".</p>
			<br>
			<a class="btn botonAdmin btn-warning" style="background-color: #f1692f" href="<?=base_url()?>Administracion/newUser/<?=$idEmp?>">Agregar Usuario</a>
			<?php } ?>

		</div>
	</div>
</main>