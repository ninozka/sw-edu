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
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/inicio0.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/inicio1.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/inicio2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/inicio3.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase1.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase2.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase3.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase4.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase5.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase6.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase7.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase8.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase9.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase10.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/juego/clase11.js"></script>
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
            game.state.add("Inicio0", Inicio0);
            game.state.add("Inicio1", Inicio1);
            game.state.add("Inicio2", Inicio2);
            game.state.add("Inicio3", Inicio3);
            game.state.add("Clase1", Clase1);
            game.state.add("Clase2", Clase2);
            game.state.add("Clase3", Clase3);
            game.state.add("Clase4", Clase4);
            game.state.add("Clase5", Clase5);
            game.state.add("Clase6", Clase6);
            game.state.add("Clase7", Clase7);
            game.state.add("Clase8", Clase8);
            game.state.add("Clase9", Clase9);
            game.state.add("Clase10", Clase10);
            game.state.add("Clase11", Clase11);
            game.state.start("Inicio0");
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
