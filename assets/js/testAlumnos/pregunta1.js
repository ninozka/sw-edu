var url = $('#url').val();
var id = 1;
var pregunta1 = function(game){

};


Inicio0.prototype = {

    init: function(){

    },

    preload: function(){

        $.ajax({
            url: url+'Welcome/obtenerPregunta',
            type: 'POST',
            data: {'id': id},
            dataType: 'json'
        })
        .done(function(data){
            this.game.load.spritesheet('pregunta1',data.pregunta,400,400);
            this.game.load.spritesheet('rc',data.rc,100,100);
            this.game.load.spritesheet('ri1',data.ri1,100,100);
            this.game.load.spritesheet('ri2',data.ri2,100,100);
        })
        .fail(function( jqXHR, textStatus, errorThrown ) {

              if (jqXHR.status === 0) {
                alert('Not connect: Verify Network.');
              } else if (jqXHR.status == 404) {
                alert('Requested page not found [404]');
              } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
              } else if (textStatus === 'parsererror') {
                alert('Requested JSON parse failed.');
              } else if (textStatus === 'timeout') {
                alert('Time out error.');
              } else if (textStatus === 'abort') {
                alert('Ajax request aborted.');
              } else {
                alert('Uncaught Error: ' + jqXHR.responseText);
              }

         });

        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);

        //this.game.load.audio('fondo','../assets/sonido/fondo.mp3');


    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(80, 70, "En este modulo responderemos las siguientes interrogantes:", { font: "28px Arial", fill: "black" });
        this.game.add.text(120, 150, "- ¿Qué es una clase?", { font: "30px Arial", fill: "black" });
        this.game.add.text(120, 190, "- ¿Qué componentes tiene una clase?", { font: "30px Arial", fill: "black" });
        this.game.add.text(120, 230, "- ¿Cómo se construye una clase?", { font: "30px Arial", fill: "black" });
        fondo = this.game.add.audio('fondo');
        fondo.play();
        fondo.loopFull(1);
        fondo.onLoop.add('',this);
    },

    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
        this.game.state.start("Clase1");
    }
}
