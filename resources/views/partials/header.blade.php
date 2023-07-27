<header>
 
  <img src="../assets/img/dc-logo.png" alt=""> 

    <ul>
        @foreach ($navLink as $link)
        <li>
            <a href="{{ $link['link'] }}"> {{$link['text']}}</a>
        </li>
            
        @endforeach
    </ul>
</header>