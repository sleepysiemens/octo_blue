@php
if (! isset($scrollTo)) {
    $scrollTo = '#news';
}

$scrollIntoViewJsSnippet = ($scrollTo === false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

    @if ($paginator->hasPages())
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <button class="btn fs-1 position-absolute" style="left: 0; width: auto !important; top: 0; bottom: 0" aria-hidden="true">&lsaquo;</button>
                @else
                    <button type="button" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="btn fs-1 position-absolute" style="left: 0; width: auto !important; top: 0; bottom: 0" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" aria-label="@lang('pagination.previous')">&lsaquo;</button>
                @endif



                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <button type="button" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="btn fs-1 position-absolute" style="right: 0; width: auto !important; top: 0; bottom: 0" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" aria-label="@lang('pagination.next')">&rsaquo;</button>
                @else
                    <span class="btn fs-1 position-absolute" style="right: 0; width: auto !important; top: 0; bottom: 0" aria-hidden="true">&rsaquo;</span>
                @endif
    @endif
