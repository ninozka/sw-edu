<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 xl12">
               <br>
                <h4 class="center-align">Creando un nuevo Curso</h4>
                <br><br>
            </div>
        </div>
    </div>
    <form class="formValidate" action="<?=base_url()?>Administrador/newCurso_proc" method="post" id="new-comp-form">
             <div class="container">
			         <div class="row">
                         <div class="col s12"></div>
			             <div class="input-field col offset-m4 offset-l4 l4 m4 s12">
                             <i class="material-icons prefix">mail</i>
			                 <input name="correo" id="correo" type="email" class="validate" required>
			                 <label for="correo">Sigla (nombre)</label>
			             </div>
                     </div>
                     <div class="col m2 s12"></div>
                    <div class="row">
			             <div class="input-field col offset-m4 offset-l4 l4 m4 s12">
                             <i class="material-icons prefix">person_pin</i>
			                 <select name="semestre" id="semestre">
                                 <option value="0" disabled selected>Selecciona un semestre</option>
			                     <option value="1">Primer Semestre</option>
			                     <option value="2">Segundo Semestre</option>
			                 </select>
			                 <label for="semestre">Semestre</label>
						 </div>
			         </div>
                     <div class="row">
			             <div class="input-field col offset-m4 offset-l4 l4 m4 s12">
                             <i class="material-icons prefix">person_pin</i>
			                 <input name="year" id="year" type="text" class="validate" required>
			                 <label for="nombre">Año</label>
						 </div>
			         </div>
			     </div>
                 <div class="container">
                     <br>
			         <div class="row">
                     <div class="col offset-m2 offset-l2 offset-xl2 l4 m4 xl4 s12" style="text-align:left">
                         <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar Curso<i class="material-icons right">send</i></button>
                      </div>
                      <div class="col l4 m4 xl4 s12" style="text-align:right">
                          <a class="btn waves-effect waves-light" href="javascript:window.history.back();">Cancelar</a>
                      </div>
                      <div class="col m2 l2 xl2 s12"></div>
					</div>
                 </div>
            </form>
</main>
<script>
    $(document).ready(function() {
        $('select').material_select();
    });

</script>