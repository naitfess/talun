@if ($paginator->hasPages())
<ul class="blog-3__pagination d-flex flex-wrap align-items-center justify-content-center mt-30">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li>
            <span class="disabled">
                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 11L1 6L6 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13 11L8 6L13 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </li>
    @else
        <li>
            <a href="{{ $paginator->previousPageUrl() }}">
                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 11L1 6L6 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M13 11L8 6L13 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </li>
    @endif

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <li><span class="disabled">{{ $element }}</span></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li><a class="active" href="#">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li>
            <a href="{{ $paginator->nextPageUrl() }}">
                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 11L13 6L8 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 11L6 6L1 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </li>
    @else
        <li>
            <span class="disabled">
                <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 11L13 6L8 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 11L6 6L1 1" stroke="#080A0B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </li>
    @endif
</ul>
@endif