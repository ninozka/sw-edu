var game = new Phaser.Game((window.innerWidth*0.65),(window.innerHeight*0.65), Phaser.CANVAS, 'phaser-example', {create: create});


var content = [
"Introducción",
"",
"En este módulo veremos:",
"   * Qué es una clase",
"   * La estructura de una clase (variables de instancia, constructor, métodos)",
"   * Manejo de referencias entre objetos de la case",
   ];
var line = [];
var wordIndex = 0;
var lineIndex = 0;
var wordDelay = 50;
var lineDelay = 400;

    
function create() {
    game.stage.backgroundColor = "#fff";
    text = game.add.text(100, 70, '', { font: "22px Arial", fill: "#ff0044" });
    nextLine();
}

function nextLine() {

    if (lineIndex === content.length)
    {
        //  We're finished
        return;
    }

    //  Split the current line on spaces, so one word per array element
    line = content[lineIndex].split(' ');

    //  Reset the word index to zero (the first word in the line)
    wordIndex = 0;

    //  Call the 'nextWord' function once for each word in the line (line.length)
    game.time.events.repeat(wordDelay, line.length, nextWord, this);

    //  Advance to the next line
    lineIndex++;

}

function nextWord() {

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
        game.time.events.add(lineDelay, nextLine, this);
    }

}
