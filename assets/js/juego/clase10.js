
var text;
var Clase10 = function(game){

};


Clase10.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.spritesheet('metodo','../assets/image/metodo4.jpg', 143, 55);
        this.game.load.spritesheet('variable','../assets/image/variable4.jpg', 141, 55);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.add.image(250,200,'metodo');
        this.game.add.image(550,200,'variable');
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(250, 50, "Modificadores de Visibilidad", { font: "36px Arial", fill: "black" });
        this.game.add.text(50, 120, "Determina quién puede tener acceso a componentes de una clase", { font: "24px Arial", fill: "black" });
        this.game.add.text(350, 150, "Se aplica para:", { font: "24px Arial", fill: "black" });



    },

    previous: function(){
        this.game.state.start("Clase9");
    },

    next: function(){
        this.game.state.start("Clase11");
    }
}
