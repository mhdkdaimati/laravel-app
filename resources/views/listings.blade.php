
{{-- wihout blade we use php tag --}}
 <?php //foreach($list as $listing): ?>
    <?php //echo $listing['id']?>
    <?php //endforeach; ?>
    
    <?php //echo $wer ?>
@extends('layout')
@section('content')

    <h1>listing from model</h1>
      @unless (count($listings)==0)
          
      
     {{-- //but with blade we use curly brase --}}
     @foreach($listings as $listing)
     <a href="/listings/{{$listing['id']}}">
      {{$listing['title']}}
     </a>
     
     <br>
     @endforeach
     @else
     <p>No. </p>
     @endunless
     {{-- {{$wer}} --}}

     {{-- directive --}}
