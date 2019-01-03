
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



<div class="ui modal test">


 <div class="image content">

   <div class="description">
     <div class="ui header">Informacion</div>

       <h5 class="ui dividing header">
    INTENSO Y CREMOSO
  </h5>


       Arpeggio, es un café intenso puro Arábica de América Central y del Sur muy tostado, tiene un potente carácter y un cuerpo con mucha presencia realzado por las notas de cacao.
       <h5 class="ui dividing header">
    ORIGEN
  </h5>
<!--

.___________. _______         ___      .___  ___.   ______      .___  ___.      ___           _______. __
|           ||   ____|       /   \     |   \/   |  /  __  \     |   \/   |     /   \         /       ||  |
`---|  |----`|  |__         /  ^  \    |  \  /  | |  |  |  |    |  \  /  |    /  ^  \       |   (----`|  |
    |  |     |   __|       /  /_\  \   |  |\/|  | |  |  |  |    |  |\/|  |   /  /_\  \       \   \    |  |
    |  |     |  |____     /  _____  \  |  |  |  | |  `--'  |    |  |  |  |  /  _____  \  .----)   |   |__|
    |__|     |_______|   /__/     \__\ |__|  |__|  \______/     |__|  |__| /__/     \__\ |_______/    (__)


    ╦═╗┬ ┬┌┬┐┬ ┬
    ╠╦╝│ │ │ ├─┤
    ╩╚═└─┘ ┴ ┴ ┴

-->
       Esta mezcla se compone de Arábicas que provienen de los mejores orígenes de América Central. Está armonizada por un toque de Arábica brasileño que aumenta su consistencia y mantiene el color y la untuosidad de la crema. Esta alquimia sutil le otorga un aroma extraordinario.

           <h5 class="ui dividing header"> TUESTE</h5>
       Arpeggio es sometido a un tueste intenso para revelar las características de cada origen. El molido fino de los granos permite desarrollar su cuerpo denso.

           <h5 class="ui dividing header"> PERFIL AROMÁTICO</h5>
       Intensas notas tostadas junto con notas sutiles de cacao y matices de madera.


   </div>
 </div>
 <div class="actions">
   <div class="ui black deny button">
  Gracias!
   </div>

 </div>
</div>




  <div class="ui grid container">




    <div class="ui text menu">
      <div class="header item">
      <a class="item">Decaffeinato</a>
      <a class="item">Espresso</a>
      <a class="item">Intenso</a>
      <a class="item">Lungo</a>
      <a class="item">Único Origen</a>

    </div>



  </div>


    <div class="column row">

      <div class="tablet mobile only column">


        <div class="ui unstackable items">
          <div class="item">
            <div class="image">
                <img src="https://espressoparaguay.com/wp-content/uploads/2018/04/cap_arpeggio.jpg">

            </div>
            <div class="content">
              <a href="#" class="ui header"  id="test">Arpeggio</a>

              <div class="extra">
Gs. 60.000


              </div>
                            <div class="meta">
                <span>10 cápsulas de Arpeggio, café molido de tueste natural para el Sistema Nespresso. Envasado en atmósfera protectora</span>
              </div>


              <div class="description">
<a class="ui label">S: 5</a> <a class="ui label">T: Intenso</a> <a class="ui label">I: 9</a>


              </div>
              <div class="extra">
                Cantidad?
                <form class="ui mini form">
                <div class="inline field">

                  <div class="item">
    <button class="menos">-</button>
    <input class="cantidadItem" value="0">
    <button class="mas">+</button>
    </div>
                </div></form>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
                <img src="https://espressoparaguay.com/wp-content/uploads/2018/04/cap_arpeggio.jpg">
            </div>
            <div class="content">
              <a href="#" class="ui header"  id="test">Arpeggio</a>
                            <div class="meta">
                <span>10 cápsulas de Arpeggio, café molido de tueste natural para el Sistema Nespresso. Envasado en atmósfera protectora</span>
              </div>

              <div class="description">
<a class="ui label">Stock 5</a> <a class="ui label">Tipo: Intenso</a> <a class="ui label">Intensidad 9</a>


              </div>
              <div class="extra">
                Cantidad?
                <form class="ui mini form">
                <div class="inline field">

                  <div class="item">
  <button class="menos">-</button>
  <input class="cantidadItem" value="0">
  <button class="mas">+</button>
  </div>
                </div></form>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
                <img src="https://espressoparaguay.com/wp-content/uploads/2018/04/cap_arpeggio.jpg">
            </div>
            <div class="content">
              <a href="#" class="ui header"  id="test">Arpeggio</a>
                            <div class="meta">
                <span>10 cápsulas de Arpeggio, café molido de tueste natural para el Sistema Nespresso. Envasado en atmósfera protectora</span>
              </div>

              <div class="description">
<a class="ui label">Stock 5</a> <a class="ui label">Tipo: Intenso</a> <a class="ui label">Intensidad 9</a>


              </div>
              <div class="extra">
                Cantidad?
                <form class="ui mini form">
                <div class="inline field">

                  <div class="item">
  <button class="menos">-</button>
  <input class="cantidadItem" value="0">
  <button class="mas">+</button>
  </div>
                </div></form>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
                <img src="https://espressoparaguay.com/wp-content/uploads/2018/04/cap_arpeggio.jpg">
            </div>
            <div class="content">
              <a href="#" class="ui header"  id="test">Arpeggio</a>
                            <div class="meta">
                <span>10 cápsulas de Arpeggio, café molido de tueste natural para el Sistema Nespresso. Envasado en atmósfera protectora</span>
              </div>

              <div class="description">
<a class="ui label">Stock 5</a> <a class="ui label">Tipo: Intenso</a> <a class="ui label">Intensidad 9</a>


              </div>
              <div class="extra">
                Cantidad?
                <form class="ui mini form">
                <div class="inline field">

                  <div class="item">
  <button class="menos">-</button>
  <input class="cantidadItem" value="0">
  <button class="mas">+</button>
  </div>
                </div></form>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
                <img src="https://espressoparaguay.com/wp-content/uploads/2018/04/cap_arpeggio.jpg">
            </div>
            <div class="content">
              <a href="#" class="ui header"  id="test">Arpeggio</a>
                            <div class="meta">
                <span>10 cápsulas de Arpeggio, café molido de tueste natural para el Sistema Nespresso. Envasado en atmósfera protectora</span>
              </div>

              <div class="description">
<a class="ui label">Stock 5</a> <a class="ui label">Tipo: Intenso</a> <a class="ui label">Intensidad 9</a>


              </div>
              <div class="extra">
                Cantidad?
                <form class="ui mini form">
                <div class="inline field">

                  <div class="item">
  <button class="menos">-</button>
  <input class="cantidadItem" value="0">
  <button class="mas">+</button>
  </div>
                </div></form>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="image">
                <img src="https://espressoparaguay.com/wp-content/uploads/2018/04/cap_arpeggio.jpg">
            </div>
            <div class="content">
              <a href="#" class="ui header"  id="test">Arpeggio</a>
                            <div class="meta">
                <span>10 cápsulas de Arpeggio, café molido de tueste natural para el Sistema Nespresso. Envasado en atmósfera protectora</span>
              </div>

              <div class="description">
<a class="ui label">Stock 5</a> <a class="ui label">Tipo: Intenso</a> <a class="ui label">Intensidad 9</a>


              </div>
              <div class="extra">
                Cantidad?
                <form class="ui form">


                  <div class="ui three column grid">
                    <div class="row">
                      <div class="column"><button class="menos  ui  button">-</button></div>
                      <div class="wide column"><input class="  cantidadItem" value="0"></div>
                      <div class="column"><button class="mas  ui  button">+</button></div>
                    </div>
                  </div>


                  <div class="ui grid">
                    <div class="three wide column"><button class="menos mini ui  button">-</button></div>
                    <div class="three wide column"><input class="mini  cantidadItem" value="0"></div>
                    <div class="three wide column"><button class="mas mini ui  button">+</button></div>
                  </div>












              </form>
              </div>
            </div>
          </div>
        </div>
<!-- -->

















<!-- -->








<!-- -->

<!-- -->

<div class="container segment">
<div style="border:1px solid #000; height:20px; width:auto;">Total: <span id="total"></span></div>


</div>


<div class="ui pagination menu">
  <a class="item active">
    1
  </a>
  <div class="disabled item">
    ...
  </div>
  <a class="item">
    10
  </a>
  <a class="item">
    11
  </a>
  <a class="item">
    12
  </a>
</div>


      </div>


    </div>


  </div>


<!-- Following Menu -->

<!-- Sidebar Menu -->



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
