var cont = 0;

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
        this.game.load.spritesheet('variable-cuerpo','../assets/image/variable-cuerpo.png', 118, 45);
        this.game.load.spritesheet('constructor-cuerpo','../assets/image/constructor-cuerpo.png', 218, 41);
        this.game.load.spritesheet('metodo-cuerpo1','../assets/image/metodo-cuerpo.png', 252, 47);
        this.game.load.spritesheet('metodo-cuerpo2','../assets/image/metodo-cuerpo.png', 252, 47);
        this.game.load.audio('win','../assets/sonido/win.mp3');


    },

    create: function(){
        var variable;
        var constructor;
        var metodo1;
        var metodo2;

        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.add.image(120,70,'base');
        this.game.add.image(190,130,'variable-cascara');
        this.game.add.image(140,175,'constructor-cascara');
        this.game.add.image(130,217,'metodo-cascara1');
        this.game.add.image(130,265,'metodo-cuerpo1');
        this.game.stage.backgroundColor = "#fff";
        this.game.add.text(10, 10, "Une los componentes de la clase del costado derecho de la pantalla con el costado izquierdo", { font: "20px Arial", fill: "black" });
        this.game.add.text(10, 30, "cuando corresponda.", { font: "20px Arial", fill: "black" });

        win = this.game.add.audio('win');

        variable=this.game.add.sprite(540,265,'variable-cuerpo');
        constructor=this.game.add.sprite(490,175,'constructor-cuerpo');
        metodo1=this.game.add.sprite(490,125,'metodo-cuerpo1');

        variable.inputEnabled=true;
        constructor.inputEnabled=true;
        metodo1.inputEnabled=true;

        variable.input.enableDrag();
        constructor.input.enableDrag();
        metodo1.input.enableDrag();

        variable.events.onDragStop.add(this.fixlocationV);
        constructor.events.onDragStop.add(this.fixlocationC);
        metodo1.events.onDragStop.add(this.fixlocationM1);


    },


    previous: function(){
        //this.game.state.start("Inicio1");
    },

    next: function(){
        if(cont>3){
            this.game.state.start("Inicio1");
        }
    },

    fixlocationV: function(variable){
        if(variable.x<250 && variable.y<150){
            variable.x=190;
            variable.y=130;
            cont++;
        }
         if(cont==3){
            win.play();
        }

    },

    fixlocationC:function(constructor){
        if(constructor.x<250 && (constructor.y<200 && constructor.y>150)){
            constructor.x=140;
            constructor.y=175;
            cont++;
        }
         if(cont==3){
            win.play();
        }

    },

    fixlocationM1:function(metodo1){
        if(metodo1.x<250 && (metodo1.y<250 && metodo1.y>180)){
            metodo1.x = 130;
            metodo1.y = 217;
            cont++;
        }
         if(cont==3){
            win.play();
        }

    }
}
