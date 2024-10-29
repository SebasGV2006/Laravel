@extends('formularios')
@section('title', 'Actividad')
@section('titulo')
    <h1 class="flex h-[130px] justify-center items-center uppercase text-[1.4em]"> hola a tododos </h1>
@endsection

@section('component_main')
@component('components.main_imagen')
@slot('img')
<img class="w-[90px] h-[90px]"src="https://th.bing.com/th/id/OIP.km-k9-DrbhiC8gyww4543AHaHa?w=170&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="Nature">
@endslot
@endcomponent
@endsection

@section('component_footer')
@component('components.footer')
@slot('footer_final_1')
<p>esto es el primer footer final</p>
@endslot
@slot('footer_final_2')
<p>Este es el footer final 2</p>
@endslot
@endcomponent
@endsection




