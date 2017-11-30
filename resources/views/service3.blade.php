@extends('layout')

@section('content')
<div class="banner">
  <div class="se-pre-con"></div>
  <div id="kb" data-ride="carousel" data-interval="6000" data-pause="hover" class="carousel kb_elastic animate_text kb_wrapper">
    <div role="listbox" class="carousel-inner">
      <div class="item active"><img src="images/banner_servicios3.jpg" alt="" class="img-responsive"/>
        <div class="carousel-caption kb_caption kb_caption_center">
          <h3 data-animation="animated flipInX">Publicidad</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="services">
  <div class="container">
    <div class="col-md-6 services-w3ls-left">
      <h3 class="agileits-title">La mejor opción</h3>
      <p>También participamos de varias campañas publicitarias (fotografía), magazines semanales y programas de televisión a nivel nacional.</p><br/>
      <p>Entre las aves más requeridas por el rubro publicitario, se encuentran nuestros búhos, águilas y gavilanes sumamente dóciles, entrenados exclusivamente para este particular.</p>
    </div>
    <div style="margin-top:7% !important" class="col-md-6 services-w3ls-row agileits-w3layouts">
      <div class="col-md-6 col-xs-4 services-grid agileits-w3layouts"><i aria-hidden="true" class="fa fa-eye"></i>
        <h5>Obten la atención del público</h5>
      </div>
      <div class="col-md-6 col-xs-4 services-grid agileits-w3layouts"><i aria-hidden="true" class="fa fa-picture-o"></i>
        <h5>Sesiones fotográficas</h5>
      </div>
      <div class="col-md-6 col-xs-4 services-grid srvs-wthree-mdl agileits-w3layouts"><i aria-hidden="true" class="fa fa-star"></i>
        <h5>Animales entrenados por profesionales</h5>
      </div>
      <div class="col-md-6 col-xs-4 services-grid srvs-wthree-mdl"><i aria-hidden="true" class="fa fa-thumbs-up"></i>
        <h5>Diversidad de aves y animales exóticos</h5>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div id="gallery" style="margin-top:-10% !important" class="gallery">
  <div class="w3_tittle second two">
    <h3 class="agile-tittle two gal">Presentaciones en el Castillo de Chancay</h3>
    <div class="line-style second"><span class="second"></span></div>
  </div>
  <div class="w3-agile-top-info">
    <div class="col-md-4 gallery-grid">
      <div class="grid">
        <figure class="effect-roxy galeria_wayra"><a href="images/exhibicion_1.jpg" data-lightbox="example-set" data-title="Descrpción para la fotograía." class="example-image-link"><img src="images/exhibicion_1.jpg" alt=""/>
            <figcaption></figcaption></a></figure>
      </div>
    </div>
    <div class="col-md-4 gallery-grid">
      <div class="grid">
        <figure class="effect-roxy galeria_wayra"><a href="images/exhibicion_2.jpg" data-lightbox="example-set" data-title="Descrpción para la fotograía." class="example-image-link"><img src="images/exhibicion_2.jpg" alt=""/>
            <figcaption></figcaption></a></figure>
      </div>
    </div>
    <div class="col-md-4 gallery-grid">
      <div class="grid">
        <figure class="effect-roxy galeria_wayra"><a href="images/exhibicion_3.jpg" data-lightbox="example-set" data-title="Descrpción para la fotograía." class="example-image-link"><img src="images/exhibicion_3.jpg" alt=""/>
            <figcaption></figcaption></a></figure>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<div style="margin-top:-10% !important" class="services">
  <div class="container">
    <h3 class="agile-tittle two gal">Otros Servicios Wayra Control</h3><br/>
    <div class="col-md-12 services-w3ls-row agileits-w3layouts">
      <div class="col-md-4 col-xs-4 services-grid agileits-w3layouts"><a href="/control-aviar"><i aria-hidden="true" class="fa fa-leaf"></i>
          <h5>Control Aviar</h5></a></div>
      <div class="col-md-4 col-xs-4 services-grid agileits-w3layouts"><a href="/exhibiciones"><i aria-hidden="true" class="fa fa-star"></i>
          <h5>Exhibiciones de cetrería</h5></a></div>
      <div class="col-md-4 col-xs-4 services-grid agileits-w3layouts"><a href="/publicidad"><i aria-hidden="true" class="fa fa-picture-o"></i>
          <h5>Publicidad</h5></a></div>
      <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
@stop
