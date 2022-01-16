
<style>

li.mx-2.w-10.py-1.px-2.text-center.rounded.border.shadow.bg-blue-300 {
    cursor: pointer;
    padding: 4px 10px !important;
    margin: 0 3px !important;
}

li.mx-2.w-10.py-1.px-2.text-center.rounded.border.shadow.bg-white {
    cursor: pointer;
    padding: 4px 10px !important;
    margin: 0 3px !important;
}

li.w-16.px-3.py-1.text-center.rounded.border.shadow.bg-white {
    cursor: pointer;
    padding: 4px 10px !important;
    margin: 0 3px !important;
}

li.w-16.px-2.py-1.text-center.rounded.border.bg-gray-200 {
    cursor: pointer;
    padding: 4px 10px !important;
    margin: 0 3px !important;
}

li.mx-2.w-10.py-1.px-2.text-center.rounded.border.shadow.bg-white:hover {
    background: #c1252987 !important;
}
li.mx-2.w-10.py-1.px-2.text-center.rounded.border.shadow.bg-blue-300 {
    background: #c12529 !important;
}
li.w-16.px-3.py-1.text-center.rounded.border.shadow.bg-white:hover {
    background: #c1252987 !important;
}

</style>

@if ($paginator->hasPages())
    
<ul class="pagination d-flex justify-content-between">

    @if ($paginator->onFirstPage())
    <li class="w-16 px-2 py-1 text-center rounded border bg-gray-200" style="background: rgb(153, 153, 153);color:white"  >Previous</li>

    @else
    <li class="w-16 px-2 py-1 text-center rounded border shadow bg-white" wire:click='previousPage'>Previous</li>

    @endif
   


@foreach ($elements as $element)
<div class="d-flex">

@if (is_array($element))
    
@foreach ($element as $page=>$url)
    


    @if ($page == $paginator->currentPage())
    <li class='mx-2 w-10 py-1 px-2 text-center rounded border shadow bg-blue-300' style="background: blue;color:white" wire:click='gotoPage({{ $page }})'>{{ $page }}</li>
    @else
    <li class='mx-2 w-10 py-1 px-2 text-center rounded border shadow bg-white' wire:click='gotoPage({{ $page }})'>{{ $page }}</li>
    @endif
    @endforeach

    @endif

</div>


@endforeach


       


    @if ($paginator->hasMorePages())
    <li class="w-16 px-3 py-1 text-center rounded border shadow bg-white" wire:click='nextPage'>Next</li>
    @else
    <li class="w-16 px-3 py-1 text-center rounded border bg-gray-200" style="background: rgb(153, 153, 153);color:white"  >Next</li>
    @endif
   
       



</ul>

@endif