
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


<div class="row">
    <div class="col-md-12">

        <div class="post-nav">







@if ($paginator->hasPages())














<ul class="pager">

    @if ($paginator->onFirstPage())


    @else
    <li wire:click='previousPage'><a href="javascript:void(0)" title="previous"><i class="fas fa-backward fa-fw" aria-hidden="true"></i>
    </a></li>

    @endif



@foreach ($elements as $element)


@if (is_array($element))

@foreach ($element as $page=>$url)



    @if ($page == $paginator->currentPage())
    <li class='active' wire:click='gotoPage({{ $page }})'> <span class="active">{{ $page }}</span> </li>
    @else
    <li wire:click='gotoPage({{ $page }})'><a href="javascript:void(0)">{{ $page }}</a></li>
    @endif
    @endforeach

    @endif




@endforeach





    @if ($paginator->hasMorePages())
    <li wire:click='nextPage'><a href="javascript:void(0)" title="next"><i class="fa fa-forward" aria-hidden="true"></i>
    </a></li>
    @else

    @endif





</ul>

@endif

</div>
</div>
</div>
