<?php $count =10 ?>
@extends('layout')
@section ('content')
    <?php $y=0 ?>
    @while ($y< $count)
        <p>vong while {{$y}}</p>
        <?php $y++ ?>
    @endwhile
    <br/>
    <?php $arr=['mang 1', 'mang 2', 'mang 3'] ?>
    @foreach ($arr as $item)
        <p>item in array: {{ $item }}</p>
    @endforeach
@endsection
@section('footer-content')    
    @for ($i = 0; $i < $count; $i++)
        <p>vòng for {{ $i}}</p>        
    @endfor
@endsection
