var Clase3 = function(game){

};


Clase3.prototype = {

    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.spritesheet('base','../assets/image/base.png', 638, 294);
        this.game.load.spritesheet('variable-cascara','../assets/image/variable-cascara.png', 118, 45);
        this.game.load.spritesheet('constructor-cascara','../assets/image/constructor-cascara.png', 219, 43);
        this.game.load.spritesheet('metodo-cascara1','../assets/image/metodo-cascara.png', 256, 45);
        this.game.load.spritesheet('metodo-cascara2','../assets/image/metodo-cascara.png', 256, 45);

    },

    create: function(){

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.add.image(120,70,'base');
        this.game.add.image(190,130,'variable-cascara');
        this.game.add.image(140,175,'constructor-cascara');
        this.game.add.image(130,217,'metodo-cascara1');
        this.game.add.image(130,265,'metodo-cascara2');

        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(10, 10, "Une los componentes de la clase del costado derecho de la pantalla con el costado izquierdo", { font: "20px Arial", fill: "black" });
        this.game.add.text(10, 30, "cuando corresponda.", { font: "20px Arial", fill: "black" });

    },

    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
        this.game.state.start("Inicio1");
    }
}
