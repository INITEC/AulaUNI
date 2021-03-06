<?php
require_once ("../../require/conexion_class.php");
require_once ("../../require/cursos.class.php");

$IDcurso = 6;
$cursoRelacionado1 = 2;
$cursoRelacionado2 = 5;

$otros = array(1, 2, 3, 4, 5);

$cursos = new cursos();
$addURL = "../../";
$c = $cursos->verCurso($IDcurso);
$c1 = $cursos->verCurso($cursoRelacionado1);
$c2 = $cursos->verCurso($cursoRelacionado2);

?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from educator.incrediblebytes.com/courses/internet-entrepreneurship/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jan 2015 10:39:37 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" media="all" href="../../wp-content/cache/autoptimize/css/autoptimize_4837425efe744a5142e57ec59b8c25b8.css" rel="stylesheet" />
<title><?php echo $c["nombreCurso"];?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="../../xmlrpc.php">
<link rel="alternate" type="application/rss+xml" title="Educator WP &raquo; Feed" href="../../feed/" />
<link rel="alternate" type="application/rss+xml" title="Educator WP &raquo; Comments Feed" href="../../comments/feed/" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../../xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../../wp-includes/wlwmanifest.xml" />
<link rel='next' title='Introduction to Educator' href='../introduction-to-educator-wp/' />
<meta name="generator" content="WordPress 4.1" />
<link rel='canonical' href='../internet-entrepreneurship/' />
<link rel='shortlink' href='../../indexee5b.html?p=142' />
</head>

<body class="single single-ib_educator_course postid-142 ">
<div id="page-container">
  <header id="page-header"  class="fixed-header">
    <div id="page-header-inner">
      <div id="header-container">
        <div class="container clearfix">
          <div id="main-logo"> <a href="../../"> <img src="../../iconos/logo.png" srcset="../../iconos/logo.png 1x, ../../iconos/logo.png 2x" alt=""> </a> </div>
          <nav id="main-nav">
            <ul id="menu-main-menu" class="menu">
              <li id="menu-item-778" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-115 current_page_item menu-item-778"><a href="../../">Inicio</a></li>
              <li id="menu-item-764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-764"><a href="../">Cursos</a></li>
              <li id="menu-item-764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-764"><a href="../../about/">Nosotros</a></li>
              <li id="menu-item-764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-764"><a href="../../contact/">Inscripciones</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section class="section-content">
    <div class="container clearfix">
      <div class="main-content">
        <article id="course-142" class="post-142 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry ib-edu-course-single">
        <h1 class="course-title entry-title"><?php echo $c["nombreCurso"];?></h1>
        <div class="course-content entry-content">
          <div class="ib-edu-course-price"> <span class="price"><?php echo $c["costo"];?></span> <a href="../../contact/" class="ib-edu-button">INSCRIPCIÓN</a> </div>
          <div class="course-image"><img width="620" height="384" src="../../iimages/programacion-obras-620x384.jpg" class="attachment-ib-educator-main-column wp-post-image" alt="Online Bookshop" srcset="../../iimages/programacion-obras-620x384.jpg 620w, ../../iimages/programacion-obras-620x384.jpg 1170w" sizes="(min-width: 768px) 620px, 96vw" /></div>
          <h2>Descripción</h2>
          <p>En cualquier proyecto es imprescindible saber en todo momento el estado del desarrollo del proyecto para ello se debe hacer uso de la gestión de proyectos a fin de hacer el procedimiento mas eficiente para culminar con éxito el proyecto.</p>
          <h3><strong>Horario: </strong><?php echo $c["horario"];?></h3>
            <h4><strong>Inicio: </strong><?php echo $c["inicio"];?><br/>
            </h4>
            <h4><strong>Duración: </strong><?php echo $c["duracion"];?><br/>
            </h4>
            <h4>&nbsp; </h4>
            
        </div>
        <section class="ib-edu-lessons">
        <h2>Syllabus</h2>
        <article class="ib-edu-lesson">
          <h1>SEMANA 1: INTRODUCCIÓN A LA GESTIÓN DE PROYECTOS.</h1>
          <div class="excerpt">
            <ul>
              <li>Conceptos de gestión de proyectos.</li>
              <li>Triple restricción de la gestión de proyectos.</li>
              <li>Ciclo de vida del proyecto. </li>
              <li>Procesos de la dirección de proyectos.</li>
              <li>Proceso: Crear la EDT.</li>
              <li>Proceso: Desarrollar el cronograma.</li>
              <li>Proceso: Estimar los costos. </li>
              <li>Instalación de WBS Chart Pro. </li>
              <li>Integración de WBS Chart Pro y MS PROJECT 2013.</li>
              <li>Conociendo el entorno y funcionalidades de WBS CHART PRO. </li>
              <li>Pasos para la creación de una EDT eficiente.</li>
              <li>Importar la EDT desde WBS Chart Pro hasta MS PROJECT 2013. </li>
              <li>Proyecto ejemplo. </li>
            </ul>
          </div>
        </article>
        <article class="ib-edu-lesson">
          <h1>SEMANA 2:  GESTIÓN DE PROYECTOS CON MS PROJECT 2013 Y PLANIFICACIÓN.</h1>
          <div class="excerpt">
            <ul>
              <li>Exploración de vistas. </li>
              <li>Creación de un nuevo proyecto.</li>
              <li>Información del proyecto.</li>
              <li>Propiedades del proyecto.</li>
              <li>Calendario del proyecto.</li>
              <li>Proyecto ejemplo. </li>
              <li>Tipos de actividades.</li>
              <li>Introducir actividades.</li>
              <li>Introducir hitos.</li>
              <li>Introducir duración de actividades.</li>
              <li>Dividir actividades.</li>
              <li>Introducir actividades repetitivas. </li>
              <li>Agrupar actividades en fases.</li>
              <li>Vincular actividades.</li>
              <li>Vincular actividades con adelantos y atrasos.</li>
              <li>Desarrollar el diagrama de Gantt.</li>
              <li>Proyecto ejemplo.</li>
            </ul>
          </div>
        </article>
        <article class="ib-edu-lesson">
          <h1>SEMANA 3: ESTIMACIÓN DE LAS ACTIVIDADES Y PLANIFICACIÓN DE
            LOS RECURSOS.</h1>
          <div class="excerpt">
            <ul>
              <li>Métodos para estimar la duración de las actividades.</li>
              <li>Diagrama de red.</li>
              <li>Descripción y visualización del diagrama de red.</li>
              <li>Trabajar con tareas en el diagrama de red.</li>
              <li>Modificar el formato y estilo de los cuadros de tarea.</li>
              <li>Proyecto ejemplo.</li>
              <li>Tipos de recursos.</li>
              <li>Ingresar recursos.</li>
              <li>Calendario y notas de recursos.</li>
              <li>Asignar recursos a las actividades.</li>
              <li>Proyecto ejemplo.</li>
            </ul>
          </div>
        </article>
        <article class="ib-edu-lesson">
          <h1>SEMANA 4: PLANIFICACIÓN DE LOS COSTOS Y PLAN DE PROYECTO.</h1>
          <div class="excerpt">
            <ul>
              <li>Conceptos básicos de costos.</li>
              <li>Especificar costos fijos y variables para los recursos de trabajo.</li>
              <li>Establecer los costos para los recursos de materiales.</li>
              <li>Establecer la acumulación de costos.</li>
              <li>Asignar recursos de materiales y de costos a las actividades.</li>
              <li>Proyecto ejemplo.</li>
              <li>Configuraciones previas para el ajuste.</li>
              <li>Reducir el tiempo del proyecto.</li>
              <li>Ajuste de costos del proyecto.</li>
              <li>Nivelación de recursos.</li>
              <li>Proyecto ejemplo.</li>
            </ul>
          </div>
        </article>
        <article class="ib-edu-lesson">
          <h1>SEMANA 5:  LÍNEA BASE Y ACTUALIZACIÓN DEL PROYECTO , EMISIÓN DE INFORMES E IMPRESIÓN.</h1>
          <div class="excerpt">
            <ul>
              <li>Definición de línea base.</li>
              <li>Establecer línea base.</li>
              <li>Establecer líneas bases adicionales.</li>
              <li>Actualizar el proyecto.</li>
              <li>Proyecto ejemplo.</li>
              <li>Informes predeterminados en MS PROJECT 2013.</li>
              <li>Emitir informes visuales.</li>
              <li>Emitir curva S del avance planificado.</li>
              <li>Emitir curva S de los costos planificados.</li>
              <li>Proyecto ejemplo.</li>
              <li>Impresión de información.</li>
              <li>Problemas con la impresión.</li>
              <li>Imprimir un informe.</li>
              <li>Crear un informe personalizado.</li>
              <li>Modificar el texto de un informe.</li>
              <li>Copiar informes entre proyectos.</li>
              <li>Modificar la plantilla de un informe visual.</li>
              <li>Crear una nueva plantilla de informe visual.</li>
              <li>Guardar datos de informes visuales.</li>
              <li>Configurar la página para imprimir.</li>
              <li>Problemas con la impresión.</li>
              <li>Proyecto ejemplo.</li>
            </ul>
          </div>
        </article>
        <ul class="educator-share-links clearfix">
          <li class="label">Share:</li>
          <li><a href="https://facebook.com/AulaUni" title="Facebook" target="_blank"><img src="../../iconos/fb2-30x30.png" alt="facebook" height="30" width="30"></a></li>
          <li><a href="https://twitter.com/aulauni" title="Twitter" target="_blank"><img src="../../iconos/twitter-30x30.png" alt="twitter" height="30" width="30"></a></li>
        </ul>
             <section class="related-courses">
          <h1>Cursos Relacionados</h1>
          <article class="post-691 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry">
            <div class="post-thumb"><a href="../metrados/"><img width="150" height="150" src="../../iimages/metrados-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Dream" srcset="../../iimages/metrados-150x150.jpg 150w, ../../iimages/metrados-150x150@2x.jpg 300w" sizes="(min-width: 768px) 150px, 96vw" /></a></div>
            <div class="post-summary">
              <h2 class="entry-title"><a href="<?php echo $addURL.$c1["url"];?>"><?php echo $c1["nombreCurso"];?></a></h2>
              <div class="post-excerpt">
                <p>Curso orientado a resolver los problemas de cuantificación del proyecto, desde el análisis de costos hasta el planeamiento.</p>
              </div>
              <div class="post-meta"><span class="price"><?php echo $c1["costo"];?></span><span><a href="<?php echo $addURL.$c1["url"];?>">Ver Curso</a></span></div>
            </div>
          </article>
          <article class="post-689 ib_educator_course type-ib_educator_course status-publish has-post-thumbnail hentry">
            <div class="post-thumb"><a href="../costos-presupuestos/"><img width="150" height="150" src="../../iimages/costos-150x150.jpg" class="attachment-thumbnail wp-post-image" alt="Diagrams" srcset="../../iimages/costos-150x150.jpg 150w, ../../iimages/costos-150x150@2x.jpg 300w" sizes="(min-width: 768px) 150px, 96vw" /></a></div>
            <div class="post-summary">
              <h2 class="entry-title"><a href="<?php echo $addURL.$c2["url"];?>"><?php echo $c2["nombreCurso"];?></a></h2>
              <div class="post-excerpt">
                <p>El costo es el factor más importante en un proyecto, aquí te daremos las herramientas para el análisis y la toma de decisiones.</p>
              </div>
              <div class="post-meta"><span class="price"><?php echo $c2["costo"];?></span><span><a href="<?php echo $addURL.$c2["url"];?>">Ver Curso</a></span></div>
            </div>
          </article>
        </section>
        </section>
        </article>
      </div>
      <div class="page-sidebar" role="complementary">
        <aside id="categories-2" class="widget widget_categories">
          <h3 class="widget-title"><strong>¿CÓMO PAGAR?</strong></h3>
          <ul>
            <li ><a href="../../contact/" style="color:#555">Cuenta bancaria</a></li>
            <li ><a href="../../contact/" style="color:#555">Oficina</a></li>
          </ul>
        </aside>
        <p>&nbsp;</p>
      </div>
          <div class="page-sidebar" role="complementary">
        <aside id="categories-2" class="widget widget_categories">
          <h3 class="widget-title"><strong>CONTÁCTANOS</strong></h3>
          <p><strong>Puede contactarnos por email o teléfono:</strong><br />
              Teléfono: (01) 728-7449<br />
            Cel: &nbsp; 994 878 932 rpc, &nbsp; 944 637 858 rpm.</p>
            <p><strong>Dirección:</strong><br />
              Universidad Nacional de Ingeniería, pabellón M, 2do piso. &nbsp; Av. Túpac Amaru 210.</p>
        </aside>
        <p>&nbsp;</p>
      </div>
      <div class="page-sidebar" role="complementary">
        <aside id="categories-2" class="widget widget_categories">
          <h3 class="widget-title"><strong>OTROS CURSOS</strong></h3>
          <ul>
            <li ><a href="<?php echo $addURL.$cursos->url($otros[0]); ?>" style="color:#555"><?php echo $cursos->nombreCurso($otros[0]); ?></a></li>
            <li ><a href="<?php echo $addURL.$cursos->url($otros[1]); ?>" style="color:#555"><?php echo $cursos->nombreCurso($otros[1]); ?></a></li>
            <li ><a href="<?php echo $addURL.$cursos->url($otros[2]); ?>" style="color:#555"><?php echo $cursos->nombreCurso($otros[2]); ?></a></li>
            <li ><a href="<?php echo $addURL.$cursos->url($otros[3]); ?>" style="color:#555"><?php echo $cursos->nombreCurso($otros[3]); ?></a></li>
            <li ><a href="<?php echo $addURL.$cursos->url($otros[4]); ?>" style="color:#555"><?php echo $cursos->nombreCurso($otros[4]); ?></a></li>  
        </ul>
        </aside>
      </div>
    </div>
  </section>
  
  <!-- FOOTER 1 -->
  <footer id="footer-widgets">
    <div class="container clearfix">
      <div class="widgets widgets-1 one-fourth">
        <aside id="text-3" class="widget widget_text">
          <h3 class="widget-title">Acerca de Nosotros</h3>
          <div class="textwidget">
            <p>Somos una institución de formación profesional en ...</p>
            <p><a href="../../about/">Leer más</a></p>
          </div>
        </aside>
      </div>
      <div class="widgets widgets-3 one-fourth">
        <aside id="recent-posts-4" >
          <h3 class="widget-title">cursos</h3>
          <dl>
            <dd><IMG SRC="../../iconos/check.png"><a> &nbsp;Autodesk Revit 2015</a></dd>
            <dd><IMG SRC="../../iconos/check.png"><a> &nbsp;Metrados en CAD</a></dd>
            <dd><IMG SRC="../../iconos/check.png"><a> &nbsp;Costos y Presupuestos</a></dd>
          </dl>
          <span class="post-date">&nbsp;</span> </aside>
      </div>
      <div class="widgets widgets-3 one-fourth">
        <aside id="recent-posts-4" >
          <h3 class="widget-title">NOVEDADES</h3>
          <dl>
            <dd><IMG SRC="../../iconos/check.png"><a> &nbsp;Próximos Cursos</a></dd>
            <dd><IMG SRC="../../iconos/check.png"><a> &nbsp;Promociones</a></dd>
            <dd><IMG SRC="../../iconos/check.png"><a> &nbsp;Paquete Corporativo</a></dd>
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
            <li><a href="https://facebook.com/AulaUni" title="Facebook" target="_blank"><img src="../../iconos/fb.png" alt="facebook" height="20" width="12"></a></li>
            <li><a href="https://twitter.com/aulauni" title="Twitter" target="_blank"><img src="../../iconos/twitter.png" alt="twitter" height="20" width="20"></a></li>
          </ul>
        </aside>
      </div>
    </div>
  </footer>
</div>
<!-- END FOOTER 1 -->

</div>
<!-- #page-container --> 

<!-- FOOTER 2 -->
<footer id="page-footer">
  <div class="container clearfix">
    <div class="copy">© Todos los derechos reservados.</div>
    <button type="button" id="back-to-top"><img src="../../iconos/top.png" alt="twitter" height="13" width="9"></span></button>
    <nav id="footer-nav">
      <ul id="menu-footer-menu" class="menu">
        <li id="menu-item-775" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-115 current_page_item menu-item-775"><a href="../../">Inicio</a></li>
        <li id="menu-item-770" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-770"><a href="../">Cursos</a></li>
        <li id="menu-item-776" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-776"><a href="../../about/">Nosotros</a></li>
        <li id="menu-item-788" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-788"><a href="../../contact/">Inscripciones</a></li>
      </ul>
    </nav>
  </div>
</footer>
<script type="text/javascript" defer src="../../wp-content/cache/autoptimize/js/autoptimize_d25c75e8da1a44b9155a5a5a3e82da7a.js"></script>
</body>

<!-- Mirrored from educator.incrediblebytes.com/courses/internet-entrepreneurship/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Jan 2015 10:39:43 GMT -->
</html>