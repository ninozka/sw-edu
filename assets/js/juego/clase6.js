
var text;
var Clase6 = function(game){

};


Clase6.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.spritesheet('constructor','../assets/image/constructor.jpg', 293, 73);
        this.game.load.spritesheet('nota','../assets/image/nota.jpg', 116, 110);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.add.image(280,100,'constructor');
        var nota = this.game.add.button(350,230,'nota','',this,2,1,0);
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(250, 50, "Constructor", { font: "36px Arial", fill: "black" });

        nota.onInputOver.add((e) => {this.over(e);});
        nota.onInputOut.add((e) => {this.out(e);});

    },

    over: function(e){

        contenido = 'Normalmente se utilizan para inicializar las variables de instancia';
        posicion = "center";

        text = this.game.add.text((window.innerWidth*0.03), (window.innerHeight*0.43),contenido, { font: "24px Arial", fill: "black", align: "center", boundsAlignH: posicion, boundsAlignV: "middle" });

        text.setTextBounds((window.innerWidth*0.03), (window.innerWidth*0.03), (window.innerWidth*0.55), (window.innerWidth*0.03));
    },

    out: function(){
        text.destroy();
    },

    previous: function(){
        this.game.state.start("Clase5");
    },

    next: function(){
        this.game.state.start("Clase7");
    }
}
