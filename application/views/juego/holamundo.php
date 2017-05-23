<!doctype html> 
<html> 
<head> 
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.min.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Phaser - Making your first game, part 1</title>
	<script type="text/javascript" src="<?=base_url()?>assets/js/phaser.min.js"></script>
	
</head>
<body>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/easytimer.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/timer.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/inicio1.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/inicio2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.materialize-autocomplete.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    
    
    <script>
        window.contenido='';
        window.flag=false;
        window.activar=false;
        usandoAjax();
        
        function usandoAjax(){
            $.get("<?php echo base_url(); ?>Welcome/prueba",{idIntro:'1'},function(data){
                window.contenido=data;
                window.flag=true;
                if(window.flag){
                    empezarPhaser();
                }
            });
        }
        
        function empezarPhaser(){
            window.game = new Phaser.Game((window.innerWidth*0.65),(window.innerHeight*0.65), Phaser.CANVAS, 'phaser-example');
            game.state.add("Inicio1", Inicio1);
            game.state.add("Inicio2", Inicio2);
            game.state.start("Inicio1",true,false,contenido,activar);
        }
    </script>
    
    <main>
       <?php $i=1?>
        <h3 style="text-align:center;">Bienvenido al Módulo 1</h3>
        <div class="container">
            <div class="row" style="border: 5px solid black;border-radius: 20px;">
                <center>
                    <div class="col s12 m12 l12 xl12" id="phaser-example"></div>
                </center>
            </div>
            <!--<div class="row">
                <div class="col s6 m6 l6 xl6" >
                    <a class="btn btn-large" >Anterior</a>
                </div>
                <div class="col s6 m6 l6 xl6" style="text-align:right">
                    <a class="btn btn-large" onclick="iniciarSiguiente<?=$i?>()" >Siguiente</a>
                    
                </div>
                <p><?= $i?></p>
                <div id="timerId" hidden="">00:00:00</div>
                <br><br><br><br>
                <button onclick="function1()" class="btn btn-large">Mostrar tiempo</button>
            </div>-->
        </div>    
    </main>
    
<script>
    
    console.log(window.activar);
    <?php $var = "Una clase en Java se compone de:-    * Variables de Instancia-    * Constructor-    * Métodos- -Estos son conocidos como MIEMBROS DE LA CLASE" ?>
    
     
    function function1() {
        var m = document.getElementById("timerId");
        var s = m.innerText;
        s = s.slice(6);
        console.log(s);
        var h = parseInt(s);
        console.log(h);
    }
    
    function iniciarSiguiente1(){
        var contenido = '<?php echo $var; ?>';
        console.log(contenido);
        var m = document.getElementById("timerId");
        var s = m.innerText;
        s = s.slice(6);
        var h = parseInt(s);
        if(h>=4){
            game.state.start("Inicio<?php echo '1' ?>",true,false,contenido);
        }
        
    }
    
</script>
</body>
</html>