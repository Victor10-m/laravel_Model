@extends('Plantilla')

@section('seccion')
<h1> equippo de trabajo</h1>

@foreach($equipo as $item)
<a href="{{ route('nosotros',$item) }}" class="h4 text-danger">{{$item}}</a><br>

@endforeach

@if(!empty($nombre))

@switch($nombre)
@case($nombre=='ignacio')
<h2 class="mt-5">el nombre es: {{ $nombre }}</h2>
<p>{{ $nombre }} Lorem, ipsum dolor sit amet consectetur 
adipisicing elit. Eius quisquam sit rem voluptatem
 in! Doloribus neque natus aperiam quia non accusamus
  laudantium, accusantium enim quos eligendi nihil et 
  est qui.</p>
@break

@case($nombre=='juan')
<h2 class="mt-5">el nombre es: {{ $nombre }}</h2>
<p>{{ $nombre }} Lorem, ipsum dolor sit amet consectetur 
adipisicing elit. Eius quisquam sit rem voluptatem
 in! Doloribus neque natus aperiam quia non accusamus
  laudantium, accusantium enim quos eligendi nihil et 
  est qui.</p>
@break

@case($nombre=='pedro')
<h2 class="mt-5">el nombre es: {{ $nombre }}</h2>
<p>{{ $nombre }} Lorem, ipsum dolor sit amet consectetur 
adipisicing elit. Eius quisquam sit rem voluptatem
 in! Doloribus neque natus aperiam quia non accusamus
  laudantium, accusantium enim quos eligendi nihil et 
  est qui.</p>
@break
@endswitch

@endif 

@endsection
