@if ($paginator->hasPages())
    <ul class="pagination flex-wrap mt-5">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled page-item"><a class="page-link"><span>«</span></a></li>
        @else
            <li clas="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a></li>
        @endif

        @if($paginator->currentPage() > 2)
            <li class="hidden-xs page-item"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
        @endif
        @if($paginator->currentPage() > 3)
            <li class="page-item"><a class="page-link"><span>...</span></a></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - $linksTo && $i <= $paginator->currentPage() + $linksAfter)
                @if ($i == $paginator->currentPage())
                    <li class="active page-item"><a class="page-link"><span>{{ $i }}</span></a></li>
                @else
                    <li class="page-item"><a class="page-link"  href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="page-item"><a class="page-link"><span>...</span></a></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 1)
            <li class="hidden-xs page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">»</a></li>
        @else
            <li class="disabled page-item"><a class="page-link"><span>»</span></a></li>
        @endif
    </ul>
@endif
