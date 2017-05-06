<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.min.css" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.migrate.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/materialize.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.materialize-autocomplete.min.js"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        
        <div class="section"></div>
        <main>
            <div class="container centrado">
                <div class="section"></div>
                <h5 class="indigo-text">Por favor, inicia sesión con tu cuenta</h5>
                <div class="section"></div>
                <div class="row">
                    <form class="col s12 m12 l12 xl12" action="<?=base_url()?>Welcome/login" method="post">
                        <div class="row">
                            <div class="z-depth-1 grey lighten-4" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                                <div class="input-field col s12 m12">
                                    <input class="validate" type="email" name="email" id="email"/>
                                    <label for="email">Ingresa tu e-mail</label>
                                </div>
                                <div class="input-field col s12 m12">
                                    <input class="validate" type="password" name="password" id="password"/>
                                    <label for="password">Ingresa tu contraseña</label>
                                </div>
                                <label style="float: right;">
                                    <a class="pink-text" href=""><b>¿Olvidaste tu contraseña?</b></a>
                                    <div class="section"></div>
                                </label>
                                <div class="row">
                                    <button type="submit" name="btn_login" class="col s12 m12 l12 btn btn-large waves-effect">Ingresar</button>
                                </div>
                            </div>
                       </div>
                    </form>
                </div>
                <a href="<?=base_url()?>Welcome/iniciarPhaser" class="btn btn-large waves-effect">Iniciar Phaser</a>
                <div class="section"></div>
                <div class="section"></div>
            </div>
        </main>
    </body>
</html>
