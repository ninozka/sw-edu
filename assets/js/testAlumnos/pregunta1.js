var pregunta;
var rc;
var ri1;
var ri2;
$.ajax({
            url: 'http://localhost/sw-edu/Welcome/obtenerPregunta/',
            type: 'post',
            data: {'id': '1'},
            dataType: 'json'
        })
        .done(function(data){
            pregunta = data.pregunta;
            rc = data.rc;
            ri1 = data.ri1;
            ri2 = data.ri2;
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

var Pregunta1 = function(game){

};


Pregunta1.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.spritesheet('pregunta',pregunta, 500, 500);
        this.game.load.spritesheet('rc',rc, 100, 100);
        this.game.load.spritesheet('ri1',ri1, 100, 100);
        this.game.load.spritesheet('ri2',ri2, 100, 100);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.stage.backgroundColor = "#fff";
        this.game.add.image(100,100,'pregunta');
        this.game.add.image(200,500,'rc');
        this.game.add.image(400,500,'ri1');
        this.game.add.image(600,500,'ri2');


    },

    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
        this.game.state.start("Clase1");
    }
}
