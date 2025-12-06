@extends('web.app')
@section('header')
@endsection
@section('contenido')

<form method="GET" action="{{route('web.index')}}">
    <div class="container px-4 px-lg-5 mt-4">
        <div class="row">
            <div class="col-md-8 mb-3">
            <a 
            href="https://wa.me/573185429141?text=Hola!%20Me%20gustaría%20saber%20más%20sobre%20sus%20servicios." 
            class="whatsapp-button" 
            target="_blank"
            >
            <img src="{{ asset('assets/img/whatsapp.png') }}" alt="WhatsApp" width="90" height="90">
</a>
            </div>
            <div class="col-md-4 mb-3">
             
            </div>
        </div>
    </div>
</form>
<!-- Section-->
<section class="py-5">
    <div class="fondo-gif">
        <img src="https://static.wixstatic.com/media/8d4bfe_92a2886a9260408e8f22151008c8c788~mv2.gif" alt="https://static.wixstatic.com/media/8d4bfe_92a2886a9260408e8f22151008c8c788~mv2.gif">
        
    </div>
    <div class="container px-4 px-lg-5 mt-1">
        
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($productos as $producto)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{asset('uploads/productos/'. $producto->imagen) }}"
                        alt="{{$producto->nombre}}" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{$producto->nombre}}</h5>
                            <!-- Product price-->
                            $ {{number_format($producto->precio, 2)}}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                href="{{route('web.show', $producto->id)}}">Ver
                                producto</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="card-footer clearfix">
            {{ $productos->appends(['search' => request('search'), 'sort' => request('sort')])->links() }}
        </div>
    </div>
    </div>
</section>
@endsection