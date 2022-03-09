@extends('layouts.master')
@section('content')

<style>

.about_head {
    position: absolute;
    background: #00000052;
    z-index: 999999;
    top: 40%;
    left: 39px;
    width: 300px;
    padding: 15px 15px;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px;
    border-bottom: 5px solid #c12729;
    color: white;
}

</style>


    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
                    <x-sidebar />

                </div>
                <div class="col-md-9 mb-5">


                    @if($singleData=='')
                    <div class="about_header position-relative mt-3">
                        <img width="100%" src="{{ asset('assets/img/HistoricalPlace.png') }}" alt="">
                        <div class="about_head">
                            <h5 class="about_title">Historical Place</h5>
                            <p class="about_sort"></p>
                        </div>
                    </div>
<div class="d-flex">
                        <table class="table table-bordered mt-5">
                            <thead class="table-dark">
                            <tr>
                                <td colspan="2" width="50%" ><h4>ঐতিহাসিক ধর্মীয় স্থাপনা সমূহ</h4></td>

                            </tr>
                        </thead>
                        <tbody>


@foreach ($rowsrel as $rowsrelList)



                            <tr>
                                <td style="    font-size: 20px;" width="30%">{{ $rowsrelList->name }}</td>
                                <td style="    font-size: 20px;" width="70%">

                                    <?php

$relPDO = \DB::connection()->getPdo();
$relQUERY = $relPDO->prepare("SELECT DISTINCT * FROM `history_places` WHERE `category`='$rowsrelList->name'");
$relQUERY->execute();
$relcat=$relQUERY->fetchAll(PDO::FETCH_OBJ);
                                        ?>
                                    <ul>
                                        <?php $i=1; ?>
                                    @foreach ($relcat as $relcatLIst)
                        <li style="    display: block !important;" ><a href="{{ url('HistoricalPlace?i='.$relcatLIst->id) }}"> {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}. {{ $relcatLIst->name }}</a></li>
                        <?php $i++; ?>
                                    @endforeach

                                    </ul>


                                </td>
                            </tr>
                            @endforeach



                        </tbody>
                        </table>



                        <table class="table table-bordered mt-5">
                            <thead class="table-dark">
                            <tr>
                                <td colspan="2"  width="50%" ><h4>ঐতিহাসিক স্থাপনা ও স্থান সমূহ</h4></td>

                            </tr>
                        </thead>
                        <tbody>





@foreach ($rowshis as $rowshisList)



<tr>
    <td style="    font-size: 20px;" width="30%">{{ $rowshisList->name }}</td>
    <td style="    font-size: 20px;" width="70%">

        <?php

        $hisPDO = \DB::connection()->getPdo();
        $hisQUERY = $hisPDO->prepare("SELECT DISTINCT * FROM `history_places` WHERE `category`='$rowshisList->name'");
        $hisQUERY->execute();
        $hiscat=$hisQUERY->fetchAll(PDO::FETCH_OBJ);
                                                ?>
                                            <ul>
                                                <?php $i=1; ?>
                                            @foreach ($hiscat as $hiscatLIst)
                                <li style="    display: block !important;" ><a href="{{ url('HistoricalPlace?i='.$hiscatLIst->id) }}"> {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}. {{ $hiscatLIst->name }}</a></li>
                                <?php $i++; ?>
                                            @endforeach

                                            </ul>



    </td>
</tr>
@endforeach




                        </tbody>
                        </table>
                    </div>




@else

@foreach ($rows as $row)


<div class="about_header position-relative mt-3">
    <img width="100%" src="{{ asset('assets/img/HistoricalPlace.png') }}" alt="">
    <div class="about_head">
        <h5 class="about_title">{{ $row->name }}</h5>
        <p class="about_sort"></p>
    </div>
</div>



<section class="aboutSection py-3 pl-3 pr-3">
    <div class="row">
        <div class="col-md-11">
            <div class="description">
                <p>{!! $row->info !!}</p>
            </div>


        </div>
  <div class="col-md-1"></div>
    </div>
</section>




@endforeach
@endif



                </div>



            </div>
        </section>

    </main>
@endsection
