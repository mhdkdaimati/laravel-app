<h1>single list</h1>
{{-- <h1>{{$singleList}}</h1> --}}
<h1> from model</h1>
     @foreach($singleList as $listing)
     {{$listing['id']}}
        <br>
     @endforeach
     