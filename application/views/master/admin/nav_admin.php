<body>
    <header>
        <ul id="slide-out" class="side-nav fixed">
        <li align="center" style="padding-top: 40px; padding-bottom: 15px;">
            <div class="background">titulo</div>
        </li>
        <li><div class="divider"></div></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Módulos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="<?=base_url()?>Administrador/">Ver Módulos</a></li>
                  <li><a href="<?=base_url()?>Administrador/">Agregar Modulo</a></li>
                  <li><a href="<?=base_url()?>Administrador/">Modificar Módulo</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Cursos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="<?=base_url()?>Administrador/cursos">Ver Cursos</a></li>
                  <li><a href="<?=base_url()?>Administrador/newCurso">Agregar Curso</a></li>
                  <li><a href="<?=base_url()?>Administrador/modCurso">Modificar Curso</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">Usuarios</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="<?=base_url()?>Administrador/Usuarios">Lista de Usuarios</a></li>
                  <li><a href="<?=base_url()?>Administrador/newUser">Agregar Usuario</a></li>
                  <li><a href="<?=base_url()?>Administrador/modUser">Modificar Usuario</a></li>
                </ul>
              </div>
            </li>
            <li><a class="collapsible-header waves-effect waves-teal" href="<?=base_url()?>Welcome/cerrarSesion">Cerrar Sesión</a></li>
          </ul>
          
        </li>
      </ul>
        <a data-activates="slide-out" class="button-collapse hide-on-large-only a-admin"><i class="material-icons">menu</i></a>
    </header>
    
    <script>
$('.button-collapse').sideNav({
      menuWidth: 250, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: false // Choose whether you can drag to open on touch screens
    }
  );
    </script>
