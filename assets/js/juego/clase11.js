
var text;
var sonidoImagen;

var Clase11 = function(game){

};


Clase11.prototype = {

    preload: function(){
        this.game.load.spritesheet('public','../assets/image/public.jpg', 141, 54);
        this.game.load.spritesheet('protected','../assets/image/protected.jpg', 139, 52);
        this.game.load.spritesheet('omision','../assets/image/omision.jpg', 139, 53);
        this.game.load.spritesheet('private','../assets/image/private.jpg', 141, 54);
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);
        this.game.load.audio('imagen','../assets/sonido/jp00463.mp3');
    },

    create: function(){
        this.game.stage.backgroundColor = "#fff";
        var public = this.game.add.button((window.innerWidth*0.03),(window.innerHeight*0.23),'public', '','', 2, 1,0);
        var protected = this.game.add.button((window.innerWidth*0.24),(window.innerHeight*0.23),'protected','', this, 2, 1,0);
        var omision = this.game.add.button((window.innerWidth*0.45),(window.innerHeight*0.23),'omision','',this,2,1,0);
        var private = this.game.add.button((window.innerWidth*0.45),(window.innerHeight*0.23),'private','',this,2,1,0);
        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a','',this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);

        sonidoImagen = this.game.add.audio('imagen');

        this.game.add.text((window.innerWidth*0.19),(window.innerHeight*0.05), 'Una clase está compuesta de', { font: "30px Arial", fill: "black" });


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
            sonidoImagen.play();
        }
        if(e.key == 'constructor'){
            contenido = 'El constructor contiene las\ninstrucciones que se ejecutan\nal momento de crear una INSTANCIA DE CLASE.';
            posicion = "center";
            sonidoImagen.play();
        }
        if(e.key == 'metodo'){
            contenido = 'Un método es un conjunto de instrucciones\nque permiten a un objeto realizar \nuna tarea que le es propia.';
            posicion = "center";
            sonidoImagen.play();
        }

        text = this.game.add.text((window.innerWidth*0.03), (window.innerHeight*0.43),contenido, { font: "24px Arial", fill: "black", align: "center", boundsAlignH: posicion, boundsAlignV: "middle" });

        text.setTextBounds((window.innerWidth*0.03), (window.innerWidth*0.03), (window.innerWidth*0.55), (window.innerWidth*0.03));
    },

    out:function(e){
        if (e.key === 'instancia' || e.key === 'constructor' || e.key === 'metodo'){
            text.destroy();
        }
    },

    next: function(){
        this.game.state.start("Clase3");
    }

}
