@if ($paginator->hasPages())
<div class="pagination-wrapper m-10-20">
    <nav class="pagination is-centered">
        
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="pagination-prev disabled">&lsaquo;</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="pagination-previous" rel="prev">&lsaquo;</a>
            @endif

            <ul class="pagination-list">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="disabled"><span class="pagination-ellipsis">&hellip;</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li>
                                    <a class="pagination-link is-current">
                                        {{ $page }}
                                    </a>
                                </li>
                            @else
                                <li><a href="{{ $url }}" class="pagination-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">&rsaquo;</a></li>
            @else
                <li class="disabled"><span>&rsaquo;</span></li>
            @endif

    </nav>
</div>   
@endif
