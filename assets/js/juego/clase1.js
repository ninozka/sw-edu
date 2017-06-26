var Clase1 = function(game){

};


Clase1.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(250, 70, "¿Qué es una clase?", { font: "36px Arial", fill: "black" });
        this.game.add.text(40, 150, "Una clase es una abstracción que define un objeto especificando:", { font: "28px Arial", fill: "black" });
        this.game.add.text(50, 190, "- Qué atributos tiene.", { font: "28px Arial", fill: "black" });
        this.game.add.text(50, 230, "- Qué operaciones tiene asociado.", { font: "28px Arial", fill: "black" });
    },

    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
        this.game.state.start("Clase2");
    }
}
