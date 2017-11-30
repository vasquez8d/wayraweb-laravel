@extends('layout')

@section('content')
<div class="banner">
  <div class="se-pre-con"></div>
  <div id="kb" data-ride="carousel" data-interval="6000" data-pause="hover" class="carousel kb_elastic animate_text kb_wrapper">
    <div role="listbox" class="carousel-inner">
      <div class="item active"><img src="images/banner_contacto.jpg" alt="" class="img-responsive"/>
        <div class="carousel-caption kb_caption kb_caption_center">
          <h3 data-animation="animated flipInX">Galería</h3>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="contact" class="contact-agile">
  <div class="container">
    <div class="w3_tittle second">
      <h3 class="agile-tittle two">Contáctanos</h3>
      <div class="line-style second"><span class="second"></span></div>
    </div>
    <div class="contact-left">
      <h4>Ubícanos</h4>
      <p>Calle los nogales 353</p>
      <p>Santa Anita - Lima</p>
      <h4>Llámanos</h4>
      <p>+(01) 4179068</p>
      <p>+(051) 943 547 748</p>
      <p>+(051) 939 086 646</p>
    </div>
    <div class="contact-middle">
      <h4>Escríbenos
        <div id="falta_info" style="display:none;"><b style="color:red">| Completa la información solicitada.</b></div>
        <form class="form-horizontal" method="post" action="/sendmail">
          <div class="form-agileinfo">
            <p>Nombres</p>
            <input type="text" id="name" name="name" placeholder="Tú nombre" required=""/>
            <p>Correo Electrónico</p>
            <input type="email" id="email" name="email" placeholder="example@dominio.com" required=""/>
          </div>
          <div class="form-agileits-w3layouts">
            <p>Mensaje</p>
            <textarea name="message" id="message" placeholder="Tú mensaje" required=""></textarea>
            <input type="submit" id="btnEnviar" value="Enviar Mensaje"/>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        <!-- {!! Form::open(['url' => 'foo/bar']) !!}
            //
        {!! Form::close() !!} -->
        <div class="clearfix"></div>
      </h4>
    </div>
  </div>
</div>
@stop
