var Inicio2 = function(game){
    
};


Inicio2.prototype = {
    
    init: function(){

    },

    preload: function(){
        this.game.load.spritesheet('btn-a','../assets/buttons/btn-a.png', 58, 58);
        this.game.load.spritesheet('btn-s','../assets/buttons/btn-s.png', 58, 58);

        this.game.load.image('drag1','../assets/dragdrop/drag1.jpg',90,90);
        this.game.load.image('drag2','../assets/dragdrop/drag2.jpg',90,90);
        this.game.load.image('drag3','../assets/dragdrop/drag3.jpg',90,90);
        this.game.load.image('drop1','../assets/dragdrop/drop1.jpg',90,90);
        this.game.load.image('drop2','../assets/dragdrop/drop2.jpg',90,90);
        this.game.load.image('drop3','../assets/dragdrop/drop3.jpg',90,90);
        this.game.load.image('grid', '../assets/dragdrop/fondo.jpg',90,90);

    },

    create: function(){


    
        var anterior = this.game.add.button((window.innerWidth*0.01),(window.innerHeight*0.53),'btn-a',this.previous,this,2,1,0);
        var siguiente = this.game.add.button((window.innerWidth*0.593),(window.innerHeight*0.53),'btn-s',this.next,this,2,1,0);
        this.game.stage.backgroundColor = "#fff";

        var group = this.game.add.group();

        group.inputEnableChildren = true;

        var drop1 = group.create(100, 600, 'drop1');
        var drop2 = group.create(100, 400, 'drop2');
        var drop3 = group.create(100, 200, 'drop3');
        var drag1 = group.create(600, 600, 'drag1');
        var drag2 = group.create(600, 400, 'drag2');
        var drag3 = group.create(600, 200, 'drag3');


    //  Enable input and allow for dragging
    drag1.inputEnabled = true;
    drag2.inputEnabled = true;
    drag3.inputEnabled = true;
    drop1.inputEnabled = true;
    drop2.inputEnabled = true;
    drop3.inputEnabled = true;
    drag1.input.enableDrag();
    drag2.input.enableDrag();
    drag3.input.enableDrag();
    drop1.input.enableDrag();
    drop2.input.enableDrag();
    drop3.input.enableDrag();

    drag1.input.enableSnap(8, 8, true, true);
    drag2.input.enableSnap(8, 8, true, true);
    drag3.input.enableSnap(8, 8, true, true);


    },

    next: function(){
        this.game.state.start("Inicio3")
    },

    previous: function(){
        this.game.state.start("Inicio1");
    },

    render: function(){
        this.game.debug.text('Group Left.', 100, 560);
        this.game.debug.text('Group Right.', 600, 560);
    },

    stopDrag: function(currentSprite, endSprite){
        if (!this.game.physics.arcade.overlap(currentSprite, endSprite, function() {
            currentSprite.input.draggable = false;
            currentSprite.position.copyFrom(endSprite.position);
            currentSprite.anchor.setTo(endSprite.anchor.x, endSprite.anchor.y);
        })) {
            currentSprite.position.copyFrom(currentSprite.originalPosition);
        }
  }
});

}
