<!DOCTYPE html>
<html>
	<head>
		<title>- CONSULTORIA MARTELLO -</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/carousel.css" type="text/css" />
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/jssor.slider-22.0.6.mini.js" type="text/javascript"></script>
        
    </head>

<body onLoad="comeco();regular()" class:"fadeIn">

	<div id="geral">

<!----------- Titulo - Inicio --------------------------------------------------------------------------------------------------------------------- -->        
	 <div id="titulo">
			
		<br><h1> </h1>
		<p>Tornando seu dinheiro um aliado.</p>
	 </div>
	

	<!----------- Menu --------------------------------------------------------------------------------------------------------------------- -->

	<div id="menu">
	
	<a href="index.php"><img src="logos/martelo.png" alt="logo" />Home</a> 
	<a href="sobre.php"><img src="logos/martelo.png" alt="logo" />Sobre</a>
	<a href="videos.php"><img src="logos/martelo.png" alt="logo" />Video-Aulas</a>
	<a href="servicos.php"><img src="logos/martelo.png" alt="logo" />Serviços</a>
	<a href="contato.php"><img src="logos/martelo.png" alt="logo" />Contato</a>
	<a href="index.php" onClick="alerta()"><img src="logos/martelo.png" alt="logo"/>Acesso Exclusivo</a>

	</div>
	



<!----------- #endregion Jssor Slider Start --------------------------------------------------------------------------------------------------------------------- -->

 <div id="slidebanner">
    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works with jquery library. -->

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1000px; height: 220px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 300px; overflow: hidden;">
            <div data-p="112.50">
                <img data-u="" src="logos/banner01.jpg" />
		
                
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Banner Slider</a>
            <div data-p="112.50" style="display: none;">
                <img data-u="thumbimage" src="logos/banner02.jpg" />
		
               
            </div>
	   <a data-u="any" href="http://www.jssor.com" style="display:none">Banner Slider</a>
            <div data-p="112.50" style="display: none;">
                <img data-u="thumbimage" src="logos/banner03.jpg" />
                <div data-u="thumb"></div>
            </div>
            
        </div> 
	<!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0;"></div>
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb01" style="bottom:2px;right:16px;">
            <div data-u="prototype" style="width:12px;height:12px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:1px;height:40px;opacity:0;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:1px;height:40px;opacity:0;" data-autocenter="2"></span>
    </div>
</div>
    
<!----------- #endregion Jssor Slider End --------------------------------------------------------------------------------------------------------------------- -->




<!----------- Feed --------------------------------------------------------------------------------------------------------------------- -->
<div id="rss">
<script type="text/javascript" src="http://output58.rssinclude.com/output?type=js&amp;id=1112110&amp;hash=6351647f99f4431172a88172aa91686c"></script>
</div>



<!----------- Rodapé --------------------------------------------------------------------------------------------------------------------- -->
<div class="footer">
        Designed by Júlio Brandão
    </div>
    </div>


<!------------------------------------ Aqui vem o Script do slide------------------------------------------------------------------ -->



    
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
               {$Duration:950,x:2,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              
            ];

            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 0
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Align: 0,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            
        });
    </script>
   

    <!--------------------Alerta Acesso Exclusivo------------------------------------------------------------------------------------------------------------ -->


<script language="Javascript" type="text/javascript">
function alerta() {
  alert("Em breve")
}
</script>
</body>
</html>
