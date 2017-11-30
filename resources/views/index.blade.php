@extends('layout')

@section('content')
<div class="banner">
  <div class="se-pre-con"></div>
  <div id="kb" data-ride="carousel" data-interval="6000" data-pause="hover" class="carousel kb_elastic animate_text kb_wrapper">
    <div role="listbox" class="carousel-inner">
      <div class="item active"><img src="images/banner.jpg" alt="" class="img-responsive"/>
        <div class="carousel-caption kb_caption kb_caption_center">
          <h3 data-animation="animated flipInX">Especialistas en Control Aviar</h3>
          <h4 data-animation="animated flipInX">Control de aves del sector agrícola</h4>
        </div>
      </div>
      <div class="item"><img src="images/banner1.jpg" alt="" class="img-responsive"/>
        <div class="carousel-caption kb_caption kb_caption_center">
          <h3 data-animation="animated flipInX">Exhibiciones de cetrería 100% interactivas</h3>
          <h4 data-animation="animated flipInX">Nuestras mejores aves para ser apreciadas</h4>
        </div>
      </div>
      <div class="item"><img src="images/banner2.jpg" alt="" class="img-responsive"/>
        <div class="carousel-caption kb_caption  kb_caption_center">
          <h3 data-animation="animated flipInX">Espectaculos y eventos</h3>
          <h4 data-animation="animated flipInX">Educación ambiental y diversión asegurada</h4>
        </div>
      </div>
    </div><a href="#kb" role="button" data-slide="prev" class="left carousel-control kb_control_left"><span aria-hidden="true" class="glyphicon glyphicon-menu-left"></span><span class="sr-only">Previous</span></a><a href="#kb" role="button" data-slide="next" class="right carousel-control kb_control_right"><span aria-hidden="true" class="glyphicon glyphicon-menu-right"></span><span class="sr-only">Next</span></a>
  </div>
</div>
<div id="review" style="background-color: rgb(154, 205, 145);" class="reviews landing-wayra"><br/><br/>
  <div class="container">
    <div class="w3_tittle second two">
      <h3 class="agile-tittle two gal">Wayra Control</h3>
      <div class="line-style second"><span class="second"></span></div>
    </div>
    <div class="w3-agile-top-info">
      <div class="col-md-7 w3_about_grid_left">
        <h6>Especialistas en nuestro trabajo</h6><br/>
        <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group about_panel">
          <div class="panel panel-default">
            <div id="headingOne" role="tab" class="panel-heading">
              <h4 class="panel-title asd"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="pa_italic"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span><i aria-hidden="true" class="glyphicon glyphicon-minus"></i>Control Aviar</a></h4>
            </div>
            <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse in">
              <div class="panel-body panel_text">Desde el principio de los tiempos, el ecosistema ha sido autónomo en esta labor. Las aves de presa, en toda su variedad de especies, han mantenido el control sobre las demás aves y mamíferos. <br/>Lamentablemente, el uso irresponsable de pesticidas, el tráfico ilegal y la reducción de sus hábitats han conseguido mermar gravemente sus poblaciones a nivel mundial.<br/><a href="/control-aviar">Ver más.</a></div>
            </div>
          </div>
          <div class="panel panel-default">
            <div id="headingTwo" role="tab" class="panel-heading">
              <h4 class="panel-title asd"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="pa_italic collapsed"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span><i aria-hidden="true" class="glyphicon glyphicon-minus"></i>Exhibiciones de cetrería y aves de presa</a></h4>
            </div>
            <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse">
              <div class="panel-body panel_text">Hemos desarrollado un formato de exhibición de aves de presa, reptiles y mamíferos pequeños altamente educativo e interactivo, el cual se puede disfrutar de lunes a domingo en “El Castillo de Chancay”.<br/><a href="exhibiciones">Ver más.</a></div>
            </div>
          </div>
          <div class="panel panel-default">
            <div id="headingThree" role="tab" class="panel-heading">
              <h4 class="panel-title asd"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="pa_italic collapsed"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span><i aria-hidden="true" class="glyphicon glyphicon-minus"></i>Publicidad</a></h4>
            </div>
            <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
              <div class="panel-body panel_text">También participamos de varias campañas publicitarias (fotografía), magazines semanales y programas de televisión a nivel nacional.<br/><a href="publicidad">Ver más.</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 w3ls-welcome-img1 w3ls-welcome-img2"><br/><br/><br/>
        <iframe src="https://www.youtube.com/embed/F6Wws6grNLg" frameborder="1"></iframe>
      </div>
    </div>
  </div>
</div>
<div id="about" class="work">
  <div class="agileits_works-top">
    <div class="col-md-6 agileits_works-grid"><img src="images/landing_nosotros.jpg" alt=" " class="img-responsive"/></div>
    <div class="col-md-6 agileits_works-grid two">
      <div class="wthree-text">
        <h4>¿Quienes Somos?</h4>
        <div class="w3_tittle">
          <div class="line-style"><span></span></div>
        </div>
        <p>Wayra Control EIRL es una empresa inscrita en el RNP (Registro Nacional de Proveedores), homologada y certificada, conformada por profesionales reconocidos en el campo de la ornitología y biología, y maestros de la cetrería con una amplia trayectoria en el rubro del control de plagas aviares.<br/><br/>La razón de nuestro éxito en cada proyecto emprendido, es el agudo conocimiento de los comportamientos y la psicología animal. A ello se suma el uso exclusivo de aves de presa nacidas en cautiverio en el Zoo criadero “El Huayco”, las mismas que han sido minuciosamente entrenadas para ejercer de manera sostenida su función predatoria. Adicionalmente a esto nuestra visión vanguardista nos ha llevado a hacer uso de nuevas tecnologías y artículos nunca antes empleados en el control aviar. (GPS para halcones, aeromodelismo, drones, etc).</p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-6 gallery-grid">
      <div class="grid">
        <figure class="effect-roxy"><a class="example-image-link"><img src="images/landing_mision.jpg" alt="" class="img-responsive"/>
            <figcaption>
              <h3><span>Misión</span></h3>
              <h3>Wayra Control EIRL contribuye socialmente, con su enfoque particular de caza, captura y/o eliminación, a la reubicación sanitaria de grandes poblaciones aviares.</h3><br/>
              <h3>La despoblación de palomas castilla o “columba livia” en zonas urbanas, o donde se requiera, no es una opción. Por el contrario, se trata de una necesidad urgente en vista de la zoonosis y la transmisión de múltiples enfermedades que afectan a la salud humana.</h3>
            </figcaption></a></figure>
      </div>
    </div>
    <div class="col-md-6 gallery-grid">
      <div class="grid">
        <figure class="effect-roxy"><a class="example-image-link"><img src="images/g2.jpg" alt=""/>
            <figcaption>
              <h3><span>Visión</span></h3>
              <h3>Wayra Control EIRL, además de generar estrategias y planes de manejo ampliamente exitosos en el rubro del control aviar, difunde y enseña el arte ancestral de la cetrería, brindando talleres y charlas de educación medioambiental en colegios, institutos y universidades. Por otra parte, contribuye a que las nuevas generaciones de niños y jóvenes hagan un uso responsable de los recursos naturales, respetando la fauna silvestre y protegiéndola.</h3>
            </figcaption></a></figure>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div class="agileits_work_grids"><br/>
    <h3 class="agile-tittle two gal">Algunos de nuestros clientes</h3><br/><br/><br/>
    <ul id="flexiselDemo1">
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_1.jpg" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Pesquera Austral</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_2.png" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Castillo de Chancay</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_3.jpg" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Colchones El Cisne</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_4.jpg" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Municipalidad de Chancay</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_5.jpg" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">UGEL N°03</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_6.png" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Agroindustrias AIB</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_7.png" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Beggie</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_8.jpg" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Talsa</a></div>
        </div>
      </li>
      <li>
        <div class="agileits_work_grid view view-sixth"><img src="images/cliente_9.png" alt=" " class="img-responsive"/>
          <div class="mask"><a class="info">Hortifrut</a></div>
        </div>
      </li>
    </ul>
  </div>
</div>
@stop
