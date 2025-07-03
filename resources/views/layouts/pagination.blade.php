@if ($paginator->items() && $paginator->lastPage() > 1)
    <div class="mx-4">
        <div>
            <p class="text-sm text-gray-700 leading-5">
                {!! __('pagination.results', [
                    'first' => $paginator->firstItem(),
                    'last' => $paginator->lastItem(),
                    'total' => $paginator->total(),
                ]) !!}
            </p>
        </div>
@endif
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination pagination-round pagination-primary">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled page-item prev" aria-label="@lang('pagination.previous')">
                    <a class="page-link"><i class="tf-icon bx bx-chevron-left"></i></a>
                </li>
            @else
                <li class="page-item prev">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        aria-label="@lang('pagination.previous')">
                        <i class="tf-icon bx bx-chevron-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item" aria-disabled="true">
                        <a class="page-link">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page">
                                <a class="page-link">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item next">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                        aria-label="@lang('pagination.next')">
                        <i class="tf-icon bx bx-chevron-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item next disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" aria-hidden="true">
                        <i class="tf-icon bx bx-chevron-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
@endif
</div>
