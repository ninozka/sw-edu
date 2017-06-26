var fondo;
var Inicio0 = function(game){

};


Inicio0.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.audio('fondo','../assets/sonido/fondo.mp3');


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
