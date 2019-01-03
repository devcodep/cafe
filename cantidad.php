
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Homepage - Semantic</title>
  <link rel="stylesheet" type="text/css" href="../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/transition.css">

  <style type="text/css">

    .hidden.menu {
      display: none;
    }

    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }
    .visible.transition {
      margin-top: auto !important;
      display: inline-block !important;
      position: relative;
      top: 2%;
    }

  </style>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.7/semantic.min.js'></script>
  <script>
  $(function(){
  	$("#test").click(function(){
  		$(".test").modal('show');
  	});
  	$(".test").modal({
  		closable: true
  	});
  });
</script>
</head>
<body>






  <div class="ui container">

      <div class="ui text menu">
        <div class="header item">
        <a class="item">Decaffeinato</a>
        <a class="item">Espresso</a>
        <a class="item">Intenso</a>
        <a class="item">Lungo</a>
        <a class="item">Único Origen</a>

      </div>



    </div>
    <div class="ui segments">

      <div class="ui segment">  <form class="ui form">
          <div class="field">
            <label>Nombre</label>
            <input type="text" name="first-name" placeholder="Nombre">
          </div>
          <div class="field">
            <label>Telefono</label>
            <input type="text" name="last-name" placeholder="Telefono">
          </div>

          <button class="ui button" type="submit">Enviar</button>
        </form></div>


    </div>
  </div>






<div class="ui grid container">



</div>
<!-- Page Contents -->
<script>
  $(document).on("click",".mas",function(e){

    var div = $(this).closest('div.item');
    var find_input = div.find('input.cantidadItem');
    var input_val = find_input.val();
    var suma = parseInt(input_val)+1;
    var new_valor = find_input.val(suma);

    calculo('suma');

  });


  $(document).on("click",".menos",function(e){

    var div = $(this).closest('div.item');
    var find_input = div.find('input.cantidadItem');
    var input_val = find_input.val();
    var resta = parseInt(input_val)-1;

    if(parseInt(resta) < 0){
      resta = 0;
    }

    var new_valor = find_input.val(resta);

    calculo('resta');

  });

  function calculo(tipo){

    if(tipo == 'suma'){

    var total = 0;
    $('.cantidadItem').each(function(i,el){

      var valor = $(this).val();

      if(!isNaN(parseInt(valor)) && parseInt(valor) != 0){

        total += parseInt(valor);

      }


    })

  }

    if(tipo == 'resta'){

    var total = $("#total").html();
    total = parseInt(total)-1;
    if(parseInt(total) < 0){
      total = 0;
    }

  }


    $("#total").html(total);

  }
</script>


</body>

</html>
