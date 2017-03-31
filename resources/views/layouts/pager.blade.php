@if ($paginator->lastPage() > 1)
<div class="block_pager">
    @if($paginator->currentPage() != 1)
    <a href="#" class="prev">Previous</a>
    @endif
    @if ($paginator->currentPage() != $paginator->lastPage())
    <a href="#" class="next">Next</a>
    @endif
    
    
    <div class="pages">
        <ul>
        @if($paginator->currentPage() > 3)
        <li><a href="{{ $paginator->url(1) }}">1</a></li>
        <li><a href="{{ $paginator->url(2) }}">2</a></li>
        <li><a href="#"> ...</a></li>
        @elseif($paginator->lastPage() > 3)
        <li class="{{ ($paginator->currentPage() == 1) ? ' active' : '' }}">
            <a href="{{ $paginator->url(1) }}">1</a>
        </li>
        <li class="{{ ($paginator->currentPage() == 2) ? ' active' : '' }}">
            <a href="{{ $paginator->url(2) }}">2</a>
        </li>
        <li class="{{ ($paginator->currentPage() == 3) ? ' active' : '' }}">
            <a href="{{ $paginator->url(3) }}">3</a>
        </li>
        @else
            
            @for($i=1,$lastPage = $paginator->lastPage();$i<= $lastPage;$i ++)
            <li @if($paginator->currentPage() == $i)class="current"@endif>
                <a href="{{ $paginator->url($i) }}">
                    {{$i}}
                </a>
            </li>
            @endfor
        @endif
        
        @for($i = max($paginator->currentPage()-2, 4); $i <= min(max($paginator->currentPage()-2, 1)+4,$paginator->lastPage()-2); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? 'current' : '' }}">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
    
    
            @if($paginator->lastPage() > $paginator->currentPage()+3)
            <li>
                <a href="#">
                    ...
                </a>
            </li>
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()-1) }}">
                    {{ $paginator->lastPage()-1 }}
                </a>
            </li>
            <li>
                <a href="{{ $paginator->url($paginator->lastPage()) }}">
                    {{ $paginator->lastPage() }}
                </a>
            </li>
            @elseif($paginator->lastPage() > 4)
            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()-1) ? 'current' : '' }}">
                <a href="{{ $paginator->url($paginator->lastPage()-1) }}">
                    {{ $paginator->lastPage()-1 }}
                </a>
            </li>
            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? 'current' : '' }}">
                <a href="{{ $paginator->url($paginator->lastPage()) }}">
                    {{ $paginator->lastPage() }}
                </a>
            </li>
            @endif
        
        </ul>
    </div>

    <div class="clearboth"></div>
</div>
@endif