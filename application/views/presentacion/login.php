<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.min.css" media="screen">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.materialize-autocomplete.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    </head>
    <body>
        
        <main>
               <div class="container">
                
                <h5 class="indigo-text">Por favor, inicia sesión con tu cuenta</h5>
                
                
                   <div class="row">
                    <form class="col s12 m12 l12 xl12" method="post">
                   <div class="row">
                           
                            
                                <div class="input-field col s12 m12 ">
                                    <input class="validate" type="email" name="email" id="email" />
                                    <label for="email">Ingresa tu e-mail</label>
                                </div>
                            
                            
                                <div class="input-field col s12 m12">
                                    <input class="validate" type="password" name="password" id="password"/>
                                    <label for="password">Ingresa tu contraseña</label>
                                </div>
                                <label style="float: right;">
                                    <a class="pink-text" href="#!"><b>¿Olvidaste tu contraseña?</b></a>
                                </label>
                            
                            <br>
                            
                               
                            
                        
                    
                   </div>
                    </form>
                     
                    </div>
                <div class="row">
                                    <button type="submit" name="btn_login" class="btn btn-large waves-effect">Ingresar</button>
                                </div>
                <button class="btn  waves-effect ">Crear Cuenta</a>
            </div>
        </main>
    </body>
</html>