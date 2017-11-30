@extends('layout')

@section('content')
<div class="banner">
  <div class="se-pre-con"></div>
  <div id="kb" data-ride="carousel" data-interval="6000" data-pause="hover" class="carousel kb_elastic animate_text kb_wrapper">
    <div role="listbox" class="carousel-inner">
      <div class="item active"><img src="images/banner_servicios1.jpg" alt="" class="img-responsive"/>
        <div class="carousel-caption kb_caption kb_caption_center">
          <h3 data-animation="animated flipInX">Control Aviar</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="services">
  <div class="container">
    <div class="col-md-12 services-w3ls-left">
      <h3 class="agileits-title">Gracias por comunicarte con nosotros</h3>
      <p>Responderemos a tu mensaje lo más pronto posible.</p><br/><br/><a href="/" class="btn btn-success btn-lg">Volver a la página principal.</a>
    </div>
  </div>
</div>
@stop
