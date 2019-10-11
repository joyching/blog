@if ($paginator->hasPages())
<ul class="pagination pagination-lg">
    {{-- Previous Page Link --}}
    @if($paginator->onFirstPage())
        <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
    @else
        <li><a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-long-arrow-left"></i></a></li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if($paginator->hasMorePages())
        <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-long-arrow-right"></i></a></li>
    @else
        <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
    @endif
</ul>
@endif
