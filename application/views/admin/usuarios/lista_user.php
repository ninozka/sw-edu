<main class="main-admin">

	<div class="container">
		<div class="col l12 m12 s12 centrado">
			<h4>Lista de Usuarios</h4>
			<br>
            <br>
			<?php if($cursos != false){ ?>
			<a class="btn botonAdmin btn-warning" href="<?=base_url()?>Administrador/newUser/">Agregar Usuario</a>
			<br>
			<br>
			<br>
			<div class="transparencia">
			    <table class="table responsive-table table-condensed">
                    <thead>
                        <tr>
                            <th class="center-align">Sigla</th>
                            <th class="center-align">Semestre</th>
                            <th class="center-align">Año</th>
                            <th class="center-align">Administrar</th>
                            <th style="text-align:center">Modificar</th>
                            <th style="text-align:center">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
              <?php foreach($cursos->result() as $row){
					?>
                        <tr>
                            <th class="center-align"><?= $row->nombre; ?></th>
                            <th class="center-align"><?= $row->semestre; ?></th>
                            <th class="center-align"><?= $row->anho;?></th>
                            <th class="center-align">
                                <a class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-cogs fa-2x" title="Modificar datos del usuario" aria-hidden="true"></i></a>
                            </th>
                            <th style="text-align:center">
                                <a class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-pencil-square-o fa-2x" title="Modificar datos del usuario" aria-hidden="true"></i></a>
                            </th>
                            <th style="text-align:center">
                            <a onclick="return confirm('desea eliminar el usuario?');" class="a-admin" href="<?=base_url()?>Administracion/"><i class="fa fa-trash fa-2x" title="Eliminar este curso" aria-hidden="true"></i></a>
                            </th>
                        </tr>
              <?php } ?>
                    </tbody>
                </table>
			</div>
			<br><br>
			<a class="btn-admin btn waves-effect waves-light" href="javascript:window.history.back();">Volver</a><br><br>
			<?php }else{ ?>
			<p style="text-align:center">No existen cursos hasta el momento, para poder ingresar cursos haga click en el boton "Ingresar Curso".</p>
			<br>
			<a class="btn botonAdmin btn-warning" href="<?=base_url()?>Administracion/newCurso>">Ingresar Curso</a>
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
