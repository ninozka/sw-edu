<!doctype html>
<html>
  <head>
  <title>Selección Perfil</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--  <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon" /> -->

  <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css" type="text/css" media="screen">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/admin.css" media="screen">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/materialize.min.css" media="screen">

  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.materialize-autocomplete.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col s12 m12 l12 xl12">
            <h1>Selecciona un perfil</h1>
           <form action="<?=base_url()?>Welcome/login2" method="post">
                 <select name="tipo" id="tipo">
                <?php foreach($tipos->result() as $row){ ?>
                    <option value="<?=$row->id?>"><?=$row->nombre?></option>
                <?php } ?>
                </select>
                <button type="submit">Ingresar</button>
           </form>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
</html>
