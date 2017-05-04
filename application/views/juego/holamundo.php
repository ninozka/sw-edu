<!doctype html> 
<html> 
<head> 
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.min.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Phaser - Making your first game, part 1</title>
	<script type="text/javascript" src="<?=base_url()?>assets/js/phaser.min.js"></script>
	
</head>
<body>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.migrate.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.materialize-autocomplete.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    
    <main>
        <h3 style="text-align:center;">Bienvenido al Módulo 1</h3>
        <div class="container">
            <div class="row" style="border: 5px solid black;border-radius: 20px;">
                <center>
                    <div class="col s12 m12 l12 xl12" id="phaser-example"></div>
                </center>
            </div>
            <div class="row">
                <div class="col s6 m6 l6 xl6">
                    <button class="btn btn-large">Anterior</button>
                </div>
                <div class="col s6 m6 l6 xl6" style="text-align:right">
                    <button class="btn btn-large">Siguiente</button>
                </div>
            </div>
        </div>    
    </main>
    

<script type="text/javascript">

var game = new Phaser.Game((window.innerWidth*0.65),(window.innerHeight*0.65), Phaser.CANVAS, 'phaser-example', {create: create});


var content = [
"¿Qué es una clase?",
"   Una clase posee: ",
"       Variables de instancia",
"       Constructor",
"       Métodos"];
var line = [];
var wordIndex = 0;
var lineIndex = 0;
var wordDelay = 50;
var lineDelay = 400;

    
function create() {
    game.stage.backgroundColor = "#fff";
    text = game.add.text(100, 32, '', { font: "30px Arial", fill: "#ff0044" });
   
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


    
</script>

</body>
</html>