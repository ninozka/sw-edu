var Clase2 = function(game){

};


Clase2.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.spritesheet('imagen','../assets/image/ejemplo-clase1.jpg', 518, 241);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.add.image((window.innerWidth*0.15),(window.innerHeight*0.22),'imagen');
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(250, 50, "EJEMPLO DE UNA CLASE", { font: "36px Arial", fill: "black" });

    },

    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
        this.game.state.start("Inicio1");
    }
}
