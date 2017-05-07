<main class="main-admin">

	<div class="container">
		<div class="col l12 m12 s12 centrado">
			<h4>Lista de Usuarios</h4>
			<br>
            <br>
			<?php if($user != false){ ?>
			<a class="btn botonAdmin btn-warning" style="background-color: #f1692f" href="<?=base_url()?>Administracion/newUser/">Agregar Usuario</a>
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
                                    echo '<th class="center-align"><i class="fa fa-check fa-2x" aria-hidden="true"></i></th>
                                          <th class="center-align"><i class="fa fa-times fa-2x" aria-hidden="true"></i></th>';
                                }else{
                                    echo '<th class="center-align"><i class="fa fa-times fa-2x" aria-hidden="true"></i></th>
                                    <th class="center-align"><i class="fa fa-check fa-2x" aria-hidden="true"></i></th>';
                                }
                            }elseif($tipos->num_rows()==2 ){
                                echo '<th class="center-align"><i class="fa fa-check fa-2x" aria-hidden="true"></i></th>
                                <th class="center-align"><i class="fa fa-check fa-2x" aria-hidden="true"></i></th>';
                            }else{
                                echo '<th class="center-align"><i class="fa fa-times fa-2x" aria-hidden="true"></i></th>
                                <th class="center-align"><i class="fa fa-times fa-2x" aria-hidden="true"></i></th>';
                            }
                            ?>

                            <th style="text-align:center">
                                <a class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-pencil-square-o fa-2x" title="Modificar datos del usuario" aria-hidden="true"></i></a>
                                <!--<input type="button" id ="btnTest" value="Test"/></th>-->
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

<div id="dialog" title="Alert message" style="display: none">
    <div class="ui-dialog-content ui-widget-content">
        <p>
            <span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0"></span>
            <label id="lblMessage"></label>
        </p>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#btnTest').click(function(){
            ShowCustomDialog();
        });
    });

    function ShowCustomDialog(){
        ShowDialogBox('Cuadro de Dialogo','¿Estas seguro de eliminar el usuario?','Ok',null);
    }

    function ShowDialogBox(title, content, btn1text, parameterList) {
        var btn1css;
        var btn2css;

        if (btn1text == '') {
            btn1css = "hidecss";
        } else {
            btn1css = "showcss";
        }


        $("#lblMessage").html(content);

        $("#dialog").dialog({
            resizable: false,
            title: title,
            modal: true,
            width: '400px',
            height: 'auto',
            bgiframe: false,
            hide: { effect: 'scale', duration: 200 },

            buttons: [
                {
                    text: btn1text,
                    "class": btn1css,
                    click: function () {
                        $("#dialog").dialog('close');

                    }
                }
            ]
        });
    }
</script>
