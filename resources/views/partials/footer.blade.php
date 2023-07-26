<footer>
    <section class="upper-footer"> 
        <div class="container-footer">
            <ul>
                @foreach ($navLink as $link)
                <li>
                    <a href="{{ $link['link'] }}"> {{$link['text']}}</a>
                </li>
                @endforeach
            </ul>
        </div> 
    </section>      
</footer>