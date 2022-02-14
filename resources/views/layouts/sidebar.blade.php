<div class="quixnav" id="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            @foreach($titles as $title)
            <li><a href="index.html"><span class="nav-text">{{$title->title}}</span></a></li>
            @endforeach
        </ul>
    </div>
</div>