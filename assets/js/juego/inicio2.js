var Inicio2 = function(game){
    
};


Inicio2.prototype = {
    
    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);

    },

    create: function(){
    
        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s','',this,2,1,0);
        this.game.stage.backgroundColor = "#fff";
        text = this.game.add.text(100, 70, "hola", { font: "22px Arial", fill: "#ff0044" });

    },

    previous: function(){
        this.game.state.start("Inicio1");
    }
}
