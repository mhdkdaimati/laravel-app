<h1>listings</h1>

{{-- wihout blade we use php tag --}}
 <?php foreach($list as $listing): ?>
    <?php echo $listing['id']?>
    <br>
    <?php endforeach; ?>
<br>
    
    <?php echo $wer ?>


     {{-- //but with blade we use curly brase --}}
     @foreach($list as $listing)
     {{$listing['id']}}
        <br>
     @endforeach
     {{$wer}}

     {{-- directive --}}
     <br>
<h1>listing from model</h1>
     @foreach($list2 as $listing)
        {{$listing['id']}}
        <br>
        <a href="/listings/{{$listing['id']}}">{{$listing['name']}}</a>
        <br>
     @endforeach
     