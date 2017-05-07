<body>
    <header>
        <ul id="nav-mobile" class="side-nav fixed">
        <li align="center" style="padding-top: 40px; padding-bottom: 15px;">
            <div class="background">titulo</div>
        </li>
        <li><div class="divider"></div></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Módulos</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="<?=base_url()?>Administrador/">Ver modulos</a></li>
                  <li><a href="<?=base_url()?>Administrador/">Agregar Modulo</a></li>
                  <li><a href="<?=base_url()?>Administrador/">Modificar Módulo</a></li>
                  <li><a href="<?=base_url()?>Administrador/">Eliminar Módulo</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header waves-effect waves-teal">Usuarios</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="<?=base_url()?>Administrador/Usuarios">Lista de Usuarios</a></li>
                  <li><a href="<?=base_url()?>Administrador/newUser">Agregar Usuario</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </header>
