
var text; 
 
var Inicio1 = function(game){
    
};


Inicio1.prototype = {

    preload: function(){
        this.game.load.spritesheet('instancia','../assets/buttons/variablesInstancia.png', 228, 90);
        this.game.load.spritesheet('constructor','../assets/buttons/constructor.png', 228, 90);
        this.game.load.spritesheet('metodo','../assets/buttons/metodo.png', 228, 90);
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
    },
    
    create: function(){
        this.game.stage.backgroundColor = "#fff";
        var instancia = this.game.add.button((window.innerWidth*0.03),(window.innerHeight*0.23),'instancia', '','', 2, 1,0);
        var constructor = this.game.add.button((window.innerWidth*0.24),(window.innerHeight*0.23),'constructor','', this, 2, 1,0);
        var metodo = this.game.add.button((window.innerWidth*0.45),(window.innerHeight*0.23),'metodo','',this,2,1,0);
        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a','',this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        
        
        this.game.add.text((window.innerWidth*0.20),(window.innerHeight*0.05), 'Una clase está compuesta de', { font: "28px Arial", fill: "black" });
        
        
        instancia.onInputOver.add((e) => {this.over(e);});
        constructor.onInputOver.add((e) => {this.over(e);});
        metodo.onInputOver.add((e) => {this.over(e);});
        instancia.onInputOut.add((e) => {this.out(e);});
        constructor.onInputOut.add((e) => {this.out(e);});
        metodo.onInputOut.add((e) => {this.out(e);});
    },
    
    over: function(e){
        var contenido;
        
        var posicion;
        
        if (e.key === 'instancia'){
            contenido = 'Las variables de instancia son\nlos atributos de una clase';
            posicion = "center";
        }
        if(e.key == 'constructor'){
            contenido = 'El constructor contiene las\ninstrucciones que se ejecutan\nal momento de crear una INSTANCIA DE CLASE.';
            posicion = "center";
        }
        if(e.key == 'metodo'){
            contenido = 'Un método es un conjunto de instrucciones\nque permiten a un objeto realizar \nuna tarea que le es propia.';
            posicion = "center";
        }
        
        text = this.game.add.text(30, 330,contenido, { font: "24px Arial", fill: "#ff0044", align: "center", boundsAlignH: posicion, boundsAlignV: "middle" });
        
        text.setTextBounds(30, 30, (window.innerWidth*0.55), 30);
    },
    
    out:function(e){
        if (e.key === 'instancia' || e.key === 'constructor' || e.key === 'metodo'){
            text.destroy();
        }
    },

    next: function(){
        this.game.state.start("Inicio2");
    }

}