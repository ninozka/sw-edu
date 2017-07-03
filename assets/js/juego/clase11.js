
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
        var protected = this.game.add.button((window.innerWidth*0.17),(window.innerHeight*0.23),'protected','', this, 2, 1,0);
        var omision = this.game.add.button((window.innerWidth*0.30),(window.innerHeight*0.23),'omision','',this,2,1,0);
        var private = this.game.add.button((window.innerWidth*0.45),(window.innerHeight*0.23),'private','',this,2,1,0);
        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a','',this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);

        sonidoImagen = this.game.add.audio('imagen');

        this.game.add.text((window.innerWidth*0.19),(window.innerHeight*0.05), 'Los modificadores de visibilidad pueden ser:', { font: "30px Arial", fill: "black" });


        public.onInputOver.add((e) => {this.over(e);});
        protected.onInputOver.add((e) => {this.over(e);});
        omision.onInputOver.add((e) => {this.over(e);});
        private.onInputOver.add((e) => {this.over(e);});
        public.onInputOut.add((e) => {this.out(e);});
        protected.onInputOut.add((e) => {this.out(e);});
        omision.onInputOut.add((e) => {this.out(e);});
        private.onInputOut.add((e) => {this.out(e);});
    },

    over: function(e){
        var contenido;

        var posicion;

        if (e.key === 'public'){
            contenido = 'Mayor visibilidad, cualquier otra clase puede acceder.';
            posicion = "center";
            sonidoImagen.play();
        }
        if(e.key == 'protected'){
            contenido = 'Cualquier subclase puede acceder.';
            posicion = "center";
            sonidoImagen.play();
        }
        if(e.key == 'omision'){
            contenido = 'Cualquier clase del mismo package puede acceder.';
            posicion = "center";
            sonidoImagen.play();
        }
        if(e.key == 'private'){
            contenido = 'Menor visibilidad, solo dentro de la misma clase.';
            posicion = "center";
            sonidoImagen.play();
        }

        text = this.game.add.text((window.innerWidth*0.03), (window.innerHeight*0.43),contenido, { font: "24px Arial", fill: "black", align: "center", boundsAlignH: posicion, boundsAlignV: "middle" });

        text.setTextBounds((window.innerWidth*0.03), (window.innerWidth*0.03), (window.innerWidth*0.55), (window.innerWidth*0.03));
    },

    out:function(e){
        if (e.key === 'public' || e.key === 'protected' || e.key === 'omision' || e.key === 'private'){
            text.destroy();
        }
    },

    next: function(){
        window.location.assign("https://www.google.cl");
    }

}
