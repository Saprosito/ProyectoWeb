@extends('adminlte::page')

@section('title', 'Mundo mangas')

@section('content_header')
    <h1>Foro</h1>
@stop

@section('content')
<x-app-layout>
<h1><b>dfgdf</b></h1>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden shadow-xl sm:rounded-lg">
                    <p> 
                        <img src="https://es.web.img2.acsta.net/pictures/21/02/16/12/45/5319199.jpg" width="150" style="float:left;"> 
                        My Hero Academia es una serie de manga escrita e ilustrada por Kōhei Horikoshi. Se basa en un one-shot realizado por el mismo autor y publicado en el quinto volumen del manga Ōmagadoki Dōbutsuen bajo el nombre de My Hero.​​ 
                    </p>
                </div>
            </div>
        </div> 
</x-app-layout>

<div class="container" style="background-color:#A6A6A6">
	<div class="row">
	<div class="col-lg-3">
			<aside id="media_image-2" class="widget widget_media_image"><img width="185" height="179" src="https://mundo-manga.com/wp-content/uploads/2020/04/logo-mundo-manga.png" class="image wp-image-8  attachment-full size-full" alt="" loading="lazy" style="max-width: 100%; height: auto;"></aside>								</div>
				<div class="col-lg-3">
					<aside id="contact-info-widget-2" class="widget contact-info"><h3 class="widget-title">Contacto</h3>		
                    <div class="contact-info contact-info-block">
					<ul class="contact-details">
					<li><i class="far fa-dot-circle"></i> <strong>Dirección:</strong> <span>Bucaramanga, Colombia</span></li>									
                    <li><i class="fab fa-whatsapp"></i> <strong>Teléfono:</strong> <span>3164829337</span></li>									<li><i class="far fa-envelope"></i> <strong>Email:</strong> <span><a href="mailto:contacto@mundo-manga.com">contacto@mundo-manga.com</a></span></li>									
                    <li><i class="far fa-clock"></i> <strong>Horario:</strong> <span>11:00–14:00 / 17:00–20:30 (L-S)</span></li>			</ul>
				</div>
	        </aside>
        <aside id="follow-us-widget-2" class="widget follow-us">		
            <div class="share-links">
                <a href="#" rel="nofollow" target="_blank" title="Facebook" class="share-facebook">Facebook</a>
                <a href="#" rel="nofollow" target="_blank" title="Twitter" class="share-twitter">Twitter</a>
                <a href="#" rel="nofollow" target="_blank" title="Linkedin" class="share-linkedin">Linkedin</a>
            </div>
        </aside>
	</div>
<div class="col-lg-3">
    <aside id="nav_menu-2" class="widget widget_nav_menu"><h3 class="widget-title">Información</h3>
    <div class="menu-informacion-legal-container"><ul id="menu-informacion-legal" class="menu">
        <li id="menu-item-9910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9910"><a >Cookies</a></li>
        <li id="menu-item-9908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9908"><a >Aviso Legal</a></li>
        <li id="menu-item-9909" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9909"><a>Política de Privacidad</a></li>
        <li id="menu-item-9916" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9916"><a >Condiciones de Venta</a></li>
        <li id="menu-item-10282" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10282"><a >Contacto</a></li>
        </ul>
</div>
    </aside>
    </div>				
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


