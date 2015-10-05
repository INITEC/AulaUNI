<?php
require_once ("require/conexion_class.php");
require_once ("require/cursos.class.php");

$cursos = new cursos();

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel='stylesheet' id='general-css'  href='rcss/themes/academy/style38b5.css?ver=3.8.5' type='text/css' media='all' />
<script type='text/javascript' src='rcss/jquery3e5a.js?ver=1.10.2'></script>
<script type='text/javascript' src='rcss/themes/academy/js/jquery.hoverIntent.min38b5.js?ver=3.8.5'></script>
<script type='text/javascript' src='rcss/themes/academy/js/jquery.themexSlider38b5.js?ver=3.8.5'></script>
<script type='text/javascript' src='rcss/themes/academy/js/general38b5.js?ver=3.8.5'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--FUENTES, ETC-->
<link type="text/css" media="all" href="wp-content/cache/autoptimize/css/autoptimize_4837425efe744a5142e57ec59b8c25b8.css" rel="stylesheet" />
<title>Aula UNI</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="xmlrpc.php">
<link rel="alternate" type="application/rss+xml" title="Educator WP &raquo; Feed" href="feed/" />
<link rel="alternate" type="application/rss+xml" title="Educator WP &raquo; Comments Feed" href="comments/feed/" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.1" />
<link rel='canonical' href='#' />
<link rel='shortlink' href='#' />
</head>

<body class="home page page-id-115">
<div id="page-container"> 
  <!-- TOOLBAR: Facebook, Google plus, tuiter  --> 
  <!-- END TOOLBAR: Facebook, Google plus, tuiter  --> 
  <!-- HEADER  -->
  <header id="page-header"  class="fixed-header">
    <div id="page-header-inner">
      <div id="header-container">
        <div class="container clearfix">
          <div id="main-logo"> <a href="#"><img src="iconos/logo.png" srcset="iconos/logo.png 1x, iconos/logo@2x.png 2x" alt=""></a> </div>
          <nav id="main-nav">
            <ul id="menu-main-menu" class="menu">
              <li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-115 current_page_item menu-item-778"><a href="#">Inicio</a></li>
              <li id="menu-item-764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-764"><a href="courses/">Cursos</a></li>
              <li id="menu-item-764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-764"><a href="about/">Nosotros</a></li>
              <li id="menu-item-764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-764"><a href="contact/">Inscripciones</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER  --> 
  <!-- SLIDER  -->
  <div class="site-wrap">
    <div class="featured-content">
      <div class="substrate"> <img src="iimages/site_bg.jpg" class="fullwidth" alt="" /> </div>
      <div class="parallax-slider themex-slider">
        <div class="substrate"> <img src="iimages/site_bg.jpg" class="fullwidth" alt="" /> </div>
        <ul>
          <li>
            <div class="row">
              <div class="fivecol column">
                <h1>METRADOS EN CAD</h1>
                <p></p>
              </div>
              <div class="sevencol column last"><img src="iimages/slide_2.png" class="alignnone" alt="" /></div>
              <div class="clear"></div>
            </div>
          </li>
          
           <li>
            <div class="row">
              <div class="fivecol column">
                <h1>REVIT ARCHITECTURE</h1>
                <p></p>
              </div>
              <div class="sevencol column last"><img class="alignnone" alt="" src="iimages/slide_1.png"/></div>
              <div class="clear"></div>
            </div>
          </li>
          
          <li>
            <div class="row">
              <div class="fivecol column">
                <h1>COSTOS Y PRESUPUESTOS CON S10</h1>
                <p></p>
              </div>
              <div class="sevencol column last"><img src="iimages/slide_3.png" class="alignnone"  alt="" /></div>
              <div class="clear"></div>
            </div>
          </li>
         
          
        </ul>
        <div class="arrow arrow-left"></div>
        <div class="arrow arrow-right"></div>
        <input type="hidden" class="slider-pause" value="6287" />
        <input type="hidden" class="slider-speed" value="1000" />
        <input type="hidden" class="slider-effect" value="slide" />
      </div>
    </div>
  </div>
  <!-- END SLIDER  --> 
  
  <!-- CARACTERISTICAS 2 --> 
  <!-- END CARACTERISTICAS2  --> 
  
  <!-- CARACTERISTICAS  --> 
  <!-- TITLE AND COURSES-->
  
  <section class="section-content">
    <div class="container clearfix"> 
      <!-- TITULO -->
      <div id="page-title">
        <h1>Cursos</h1>
      </div>
      <!-- END TITULO --> 
      <!-- COURSES -->
      <div class="posts-grid posts-grid-3 clearfix"> 
        <!-- FIRST COURSE-->
        <?php
            $c1 = $cursos->verCurso(1);      
        ?>
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c1["url"];?>"><img width="360" height="224" src="iimages/revit-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/revit-360x224.jpg 360w, iimages/revit-360x224@2x.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c1["url"];?>" rel="bookmark"><?php echo $c1["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>Curso orientado al uso de las tecnologías <strong>BIM</strong>, el cual permite modelar en 3D el desarrollo completo de un proyecto.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c1["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- END FIRST COURSE--> 
        
        <!-- SECOND COURSE-->
        <?php
            $c2 = $cursos->verCurso(2);      
        ?>
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c2["url"];?>"><img width="360" height="224" src="iimages/metrados-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/metrados-360x224.jpg 360w, iimages/metrados-360x224@2x.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c2["url"];?>" rel="bookmark"><?php echo $c2["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>Curso orientado a resolver los problemas de cuantificación del proyecto, desde el análisis de costos hasta el planeamiento.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c2["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- END SECOND COURSE-->
        
          
        <!-- TERCER CURSO -->
        <?php
            $c3 = $cursos->verCurso(3);      
        ?>  
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c3["url"];?>"><img width="360" height="224" src="iimages/autocad-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/autocad-360x224.jpg 360w, iimages/autocad-360x224.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c3["url"];?>" rel="bookmark"><?php echo $c3["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>Curso básico donde aprenderas los fundamentos básicos de el uso de las herramientas cad y del entorno cuyo fin es potenciar su uso en los diversos camposde la ingeniería.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c3["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- FIN TERCER CURSO -->
        
        <!-- FIN PRIMERA FILA --> 
          
        <!-- INICIO SEGUNDA FILA -->
        <!-- CUARTO CURSO -->
        <?php
            $c4 = $cursos->verCurso(4);      
        ?>
          
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c4["url"];?>"><img width="360" height="224" src="iimages/Excel-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/Excel-360x224.jpg 360w, iimages/Excel-360x224.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c4["url"];?>" rel="bookmark"><?php echo $c4["nombreCurso"];?></a><a href="courses/planos/" rel="bookmark"></a></h2>
            <div class="post-excerpt">
              <p>Curso en el que desarrollaras los fundamento en la utilización de hojas de calculo y sus herramientas principales para la solución de problemas de ingeniería.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c4["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- FIN CUARTO CURSO -->
        
        <!-- QUINTO CURSO -->
        <?php
            $c5 = $cursos->verCurso(5);      
        ?>
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"><a href="<?php echo $c5["url"];?>"><img width="360" height="224" src="iimages/costos-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/costos-360x224.jpg 360w, iimages/costos-360x224@2x.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c5["url"];?>" rel="bookmark"><?php echo $c5["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>El costo es el factor más importante en un proyecto, aquí te daremos las herramientas para el análisis y la toma de decisiones.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c5["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- FIN QUINTO CURSO -->
        
        <!-- SEXTO CURSO-->
        <?php
            $c6 = $cursos->verCurso(6);      
        ?>
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c6["url"];?>"><img width="360" height="224" src="iimages/programacion-obras-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/programacion-obras-360x224.jpg 360w, iimages/programacion-obras-360x224@2x.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c6["url"];?>" rel="bookmark"><?php echo $c6["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>Curso orientado a la aplicación de gestión de proyectos con el software Ms Project.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c6["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- FIN SEXTO CURSO--> 
        
        <!-- FIN SEGUNDA FILA -->
          
        <!-- TERCERA FILA -->
        <!-- SEPTIMO CURSO-->
        <?php
            $c7 = $cursos->verCurso(7);      
        ?>
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c7["url"];?>"><img width="360" height="224" src="iimages/Revit-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/Revit-360x224.jpg 360w, iimages/Revit-360x224.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c7["url"];?>" rel="bookmark"><?php echo $c7["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>Desarrollo fundamental de la tecnología BIM con el uso y diagramación de elementos estructurales en el entorno REVIT.</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c7["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- END SEPTIMO CURSO--> 
        
        <!-- OCTAVO CURSO-->
        <?php
            $c8 = $cursos->verCurso(8);      
        ?>
        
        <article id="post-691" class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry post-grid">
          <div class="post-thumb"> <a href="<?php echo $c8["url"];?>"><img width="360" height="224" src="iimages/civil3d-iii-360x224.jpg" class="attachment-ib-educator-grid wp-post-image" alt="Dream" srcset="iimages/civil3d-iii-360x224.jpg 360w, iimages/civil3d-iii-360x224@2x.jpg 720w" sizes="(min-width: 768px) 360px, 96vw" /></a> </div>
          <div class="post-body">
            <h2 class="entry-title"><a href="<?php echo $c8["url"];?>" rel="bookmark"><?php echo $c8["nombreCurso"];?></a></h2>
            <div class="post-excerpt">
              <p>En este curso desarrollaremos los temas desde las obras lineales las cuales han tenido un gran impacto en los últimos años Además...</p>
            </div>
          </div>
          <footer class="post-meta"> <span ><a href="<?php echo $c8["url"];?>" rel="bookmark">Ver curso</a></span> </footer>
        </article>
        <!-- END OCTAVO CURSO--> 
        
        </div>
        <!-- FIN TERCERA FILA -->
        <!-- FIN CURSOS -->
      
    </div>
  </section>
  
  <!-- PROFESORES -->

  
  
  
  
  <!-- END PROFESORES --> 
  
 
  
  
  
  <!-- END END TITLE AND COURSES --> 
  <!-- END CARACTERISTICAS  --> 
  
  <!-- ULTIMOS CURSOS  --> 
  <!-- END ULTIMOS CURSOS  --> 
  
  <!-- DOCENTES  --> 
  <!-- END DOCENTES  --> 
  
  <!-- EDUCATORS  --> 
  <!-- END EDUCATORS  --> 
  
  <!-- OUR STUDENTS --> 
  <!-- END OUR STUDENTS --> 
  
  <!-- FOOTER 1 -->
  <footer id="footer-widgets">
    <div class="container clearfix">
      <div class="widgets widgets-1 one-fourth">
        <aside id="text-3" class="widget widget_text">
          <h3 class="widget-title">Acerca de Nosotros</h3>
          <div class="textwidget">
            <p>Somos una institución de formación profesional en ...</p>
            <p><a href="about/">Leer más</a></p>
          </div>
        </aside>
      </div>
      <div class="widgets widgets-3 one-fourth">
        <aside id="recent-posts-4" >
          <h3 class="widget-title">cursos</h3>
          <dl>
            <dd><IMG SRC="iconos/check.png"><a> &nbsp;Autodesk Revit 2015</a></dd>
            <dd><IMG SRC="iconos/check.png"><a> &nbsp;Metrados en CAD</a></dd>
            <dd><IMG SRC="iconos/check.png"><a> &nbsp;Costos y Presupuestos</a></dd>
          </dl>
          <span class="post-date">&nbsp;</span> </aside>
      </div>
      <div class="widgets widgets-3 one-fourth">
        <aside id="recent-posts-4" >
          <h3 class="widget-title">NOVEDADES</h3>
          <dl>
            <dd><IMG SRC="iconos/check.png"><a> &nbsp;Próximos Cursos</a></dd>
            <dd><IMG SRC="iconos/check.png"><a> &nbsp;Promociones</a></dd>
            <dd><IMG SRC="iconos/check.png"><a> &nbsp;Paquete Corporativo</a></dd>
          </dl>
          <span class="post-date">&nbsp;</span> </aside>
      </div>
      <div class="widgets widgets-4 one-fourth">
        <aside id="widget_educator_contact-3" class="widget widget-educator-contact">
          <h3 class="widget-title">REDES SOCIALES</h3>
          <div class="text">
            <p>Comparte a tus amigos:</p>
          </div>
          <ul class="links">
            <li><a href="https://facebook.com/AulaUni" title="Facebook" target="_blank"><img src="iconos/fb.png" alt="facebook" height="20" width="12"></a></li>
            <li><a href="https://twitter.com/aulauni" title="Twitter" target="_blank"><img src="iconos/twitter.png" alt="twitter" height="20" width="20"></a></li>
          </ul>
        </aside>
      </div>
    </div>
  </footer>
</div>
<!-- END FOOTER 1 --> 

<!-- FOOTER 2 -->
<footer id="page-footer">
  <div class="container clearfix">
    <div class="copy">© Todos los derechos reservados.</div>
    <button type="button" id="back-to-top"><img src="iconos/top.png" alt="top" height="13" width="9"></span></button>
    <nav id="footer-nav">
      <ul id="menu-footer-menu" class="menu">
        <li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-115 current_page_item menu-item-775"><a href="#">Inicio</a></li>
        <li id="menu-item-770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-770"><a href="courses/">Cursos</a></li>
        <li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-776"><a href="about/">Nosotros</a></li>
        <li id="menu-item-788" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-788"><a href="contact/">Inscripciones</a></li>
      </ul>
    </nav>
  </div>
</footer>
<script type="text/javascript" defer src="wp-content/cache/autoptimize/js/autoptimize_d25c75e8da1a44b9155a5a5a3e82da7a.js"></script>
</body>

<!-- Mirrored from educator.incrediblebytes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jan 2015 10:38:17 GMT -->
</html>