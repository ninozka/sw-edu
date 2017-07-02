
var text;
var Clase7 = function(game){

};


Clase7.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.spritesheet('constr','../assets/image/constructor2.jpg', 676, 312);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.add.image(110,70,'constr');
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(250, 50, "Constructor", { font: "36px Arial", fill: "black" });

    },

    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
       this.game.state.start("Clase8");
    }
}
