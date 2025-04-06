
@extends('layout')
@section('content')
    
<h1>{{$listing['title']}}</h1>
<br>
<p>
     {{$listing['id']}}
     <br>
     {{$listing['title']}}
     <br>
     {{$listing['tags']}}
     <br>
     {{$listing['company']}}
     <br>
     {{$listing['location']}}
     <br>
     {{$listing['email']}}
     <br>
     {{$listing['website']}}
     <br>
     {{$listing['description']}}
     <br>
     {{$listing['created_at']}}

</p>
@endsection
