var content=[];
var line = [];
var wordIndex = 0;
var lineIndex = 0;
var wordDelay = 50;
var lineDelay = 400; 
 
var Inicio1 = function(game){
    
};


Inicio1.prototype = {
    
    init: function(contenido,activar){
        console.log(contenido);
        var caracter='';
        for(var i = 0;i<contenido.length;i++){
            if(contenido.charAt(i)=='-'){
                console.log(caracter);
                content.push(caracter);
                caracter='';
            }else{
                caracter = caracter+contenido.charAt(i);
            }
            if((i+1) == contenido.length){
                content.push(caracter);
            }
            
        }
        
        console.log(content);
    },

    preload: function(){
        this.game.load.spritesheet('button-a','../assets/buttons/btn-anterior.jpg', 212, 80);
        this.game.load.spritesheet('button-s','../assets/buttons/btn-siguiente.jpg', 212, 80);
    },
    
    create: function(){
        this.game.stage.backgroundColor = "#fff";
        var buttonA = this.game.add.button(30,340,'button-a', this.wea, this, 2, 1,0);
        var buttonS = this.game.add.button(645,340,'button-s','', this, 2, 1,0);
        
        text = this.game.add.text(100, 70, '', { font: "22px Arial", fill: "#ff0044" });
        this.nextLine();
    },
    
    wea: function(){
        console.log('loquesea');
        console.log('loquesea');
    },
    
    nextLine: function(){
        if (lineIndex === content.length)
        {
            return;
        }

        //  Split the current line on spaces, so one word per array element
        line = content[lineIndex].split(' ');

        //  Reset the word index to zero (the first word in the line)
        wordIndex = 0;

        //  Call the 'nextWord' function once for each word in the line (line.length)
        this.game.time.events.repeat(wordDelay, line.length, this.nextWord, this);

        //  Advance to the next line
        lineIndex++;
    },
    
    nextWord: function(){
         //  Add the next word onto the text string, followed by a space
        text.text = text.text.concat(line[wordIndex] + " ");

        //  Advance the word index to the next word in the line
        wordIndex++;

        //  Last word?
        if (wordIndex === line.length)
        {
            //  Add a carriage return
            text.text = text.text.concat("\n");

            //  Get the next line after the lineDelay amount of ms has elapsed
            this.game.time.events.add(lineDelay, this.nextLine, this);
        }
    }

}
