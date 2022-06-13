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

        a.proItem:hover {
            background: #ffbfbf;
            text-decoration: none;
        }

        .item3 {
            width: 10%;
        }

        .item1 {
            width: 3%;
        }

        .item4 {
            width: 20%;
        }
    </style>


    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3  sidebarmobile" style="">
                    <x-sidebar />

                </div>
                <div class="col-md-9 mb-5">


                    @if ($singleData == '')
                        <div class="about_header position-relative mt-3">
                            <img width="100%" src="{{ asset('assets/img/ProminentPersons.png') }}" alt="">
                            <div class="about_head">
                                <h5 class="about_title">Parliamentary Persons</h5>
                                <p class="about_sort"></p>
                            </div>
                        </div>
                        {{-- <table class="table table-bordered mt-5">
                            <thead class="table-dark">
                            <tr>
                                <td width="50%" >Parliamentary Persons (Male)</td>
                                <td width="50%" >Parliamentary Persons (Female)</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        <?php $i = 1; ?>
                                    @foreach ($rowsMale as $rowsMaleLIst)
                        <li style="    display: block !important;" ><a href="{{ url('ParliamentaryPersons?i='.$rowsMaleLIst->id) }}"> {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}. {{ $rowsMaleLIst->name }}</a></li>
                        <?php $i++; ?>
                                    @endforeach

                                    </ul>

                                </td>
                                <td>

                                    <ul>
                                        <?php $i = 1; ?>
                                    @foreach ($rowsFemale as $rowsFemaleLIst)
                        <li style="    display: block !important;" ><a href="{{ url('ParliamentaryPersons?i='.$rowsMaleLIst->id) }}"> {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}. {{ $rowsFemaleLIst->name }}</a></li>
                        <?php $i++; ?>
                                    @endforeach

                                    </ul>

                                </td>
                            </tr>
                        </tbody>
                        </table> --}}






                        <div class="row">

                            <div class="col-md-12">

                                <h5 class="proHead mt-3" style="background: #EC071A;color:white;">বিক্রামপুরের সংসদ
                                    সদস্যগণ</h5>


                                <div class="prolist">

                                    <?php $i = 1; ?>
                                    @foreach ($rowsMale as $rowsMaleLIst)
                                        @php
                                            $ps_history = $rowsMaleLIst->ps_history;
                                            $ps_history = json_decode($ps_history);
                                            rsort($ps_history);
                                        @endphp
                                        <a href="{{ url('ParliamentaryPersons?i=' . $rowsMaleLIst->id) }}"
                                            class="proItem d-flex justify-content-between">
                                            <div class="item1">
                                                {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}।</div>
                                            <div class="item3"><img width="100px"
                                                    src="{{ $rowsMaleLIst->image }}" alt=""></div>
                                            <div class="item4">{{ $rowsMaleLIst->name }}</div>
                                            <div class="item4">{{ $ps_history[0]->Positon }}</div>
                                            <div class="item4">

                                                {{ int_en_to_bn($ps_history[0]->Session_Start) }}-{{ int_en_to_bn($ps_history[0]->Session_End) }}
                                                সংসদ</div>

                                        </a>


                                        <?php $i++; ?>
                                    @endforeach

                                </div>

                            </div>





                        </div>
                    @else
                        @foreach ($rows as $row)
                            <div class="about_header position-relative mt-3">
                                <img width="100%" src="{{ asset('assets/img/ProminentPersons.png') }}" alt="">
                                <div class="about_head">
                                    <h5 class="about_title">{{ $row->name }}</h5>
                                    <p class="about_sort"></p>
                                </div>
                            </div>



                            <section class="aboutSection py-3 pl-3 pr-3">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="description">

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Session</th>
                                                        <th>Position</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $ps_history = $row->ps_history;
                                                    $ps_history = json_decode($ps_history);
                                                    rsort($ps_history);

                                                    ?>

                                                    @foreach ($ps_history as $rowshistory)
                                                        <tr>
                                                            <td>{{ $rowshistory->Session_Start }}-{{ $rowshistory->Session_End }}
                                                            </td>
                                                            <td>{{ $rowshistory->Positon }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>




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
