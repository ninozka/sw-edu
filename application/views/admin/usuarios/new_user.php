<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
               <br>
                <h4 class="center-align">Nuevo Usuario</h4>
                <br><br>
            </div>
        </div>
    </div>
    <form onsubmit="return validarPassword();" class="formValidate" action="<?=base_url()?>Administrador/newUser_proc" method="post" id="new-comp-form">
             <div class="container">
                     <div class="row">
                         <div class="col m2 s12"></div>
                         <div class="col l4 m4 s12">
                          <h6>Seleccione uno o varios perfiles:</h6>
                           <p>
                            <?php if($tipos != false){ $i = 0; foreach($tipos->result() as $row){ ?>

                              <input type="checkbox" name="tipo[]" value="<?=$row->id_tipo?>" id="tipo<?=$i?>" />
                              <label for="tipo<?=$i?>"><?=$row->nombre?></label>

                            <?php $i++; } } ?>
                            </p>
                            <input type="hidden" name="cont" value<?=$i?> >
                         </div>
                     </div>
			         <div class="row">
                         <div class="col m2 s12"></div>
			             <div class="input-field col l4 m4 s12">
                             <i class="material-icons prefix">mail</i>
			                 <input name="correo" id="correo" type="email" class="validate" required>
			                 <label for="correo">E-Mail del Usuario</label>
			             </div>
                         <div class="input-field col l4 m4 s12">
                             <i class="material-icons prefix">label</i>
                             <input onchange="Rut(this.value);" name="rut" id="rut" type="text" class="validate" required>
                             <label for="rut">Rut (*):</label>
                         </div>
                     </div>
                     <div class="col m2 s12"></div>
                    <div class="row">
			             <div class="col m2 s12"></div>
			             <div class="input-field col l4 m4 s12">
                             <i class="material-icons prefix">person_pin</i>
			                 <input name="nombre" id="nombre" type="text" class="validate" required>
			                 <label for="nombre">Nombre(s):</label>
						 </div>
			             <div class="input-field col l4 m4 s12">
                             <i class="material-icons prefix">person_pin</i>
			                 <input name="apellido" id="apellido" type="text" class="validate" required>
			                 <label for="apellido">Apellido(s):</label>
			             </div>
			             <div class="col m2 s12"></div>
			         </div>
                     <div class="row">
			             <div class="col m2 s12"></div>
			             <div class="input-field col l4 m4 s12">
                             <i class="material-icons prefix">lock</i>
			                 <input name="password" id="password" type="password" class="validate" required>
			                 <label for="password">Contraseña:</label>
						 </div>
			             <div class="input-field col l4 m4 s12">
                             <i class="material-icons prefix">lock</i>
			                 <input id="password2" type="password" class="validate" required>
			                 <label for="password2">Repetir Contraseña:</label>
			             </div>
			             <div class="col m6 l6 s12"></div>
			         </div>
			     </div>
                 <div class="container">
                     <br>
			         <div class="row">
                    <div class="col m2 l2 xl2 s12"></div>
                     <div class="col l4 m4 xl4 s12" style="text-align:left">
                         <button class="btn waves-effect waves-light" type="submit" name="action">Agregar Usuario<i class="material-icons right">send</i></button>
                      </div>
                      <div class="col l4 m4 xl4 s12" style="text-align:right">
                          <a class="btn waves-effect waves-light" href="javascript:window.history.back();">Cancelar</a>
                      </div>
                      <div class="col m2 l2 xl2 s12"></div>
					</div>
                 </div>
            </form>
</main>
