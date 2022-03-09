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
                        <img width="100%" src="{{ asset('assets/img/ProminentPersons.png') }}" alt="">
                        <div class="about_head">
                            <h5 class="about_title">Prominent Persons</h5>
                            <p class="about_sort"></p>
                        </div>
                    </div>

                        <table class="table table-bordered mt-5">
                            <thead class="table-dark">
                            <tr>
                                <td width="50%" >বিক্রামপুরের ব্যক্তিত্ব</td>
                                <td width="50%" >বিক্রামপরের নারী ব্যক্তিত্ব</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <ul>
                                        <?php $i=1; ?>
                                    @foreach ($rowsMale as $rowsMaleLIst)
                        <li style="    display: block !important;" ><a href="{{ url('ProminentPersons?i='.$rowsMaleLIst->id) }}"> {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}. {{ $rowsMaleLIst->name }}</a></li>
                        <?php $i++; ?>
                                    @endforeach

                                    </ul>

                                </td>
                                <td>

                                    <ul>
                                        <?php $i=1; ?>
                                    @foreach ($rowsFemale as $rowsFemaleLIst)
                        <li style="    display: block !important;" ><a href="{{ url('ProminentPersons?i='.$rowsMaleLIst->id) }}"> {{ int_en_to_bn(str_pad($i, 2, '0', STR_PAD_LEFT)) }}. {{ $rowsFemaleLIst->name }}</a></li>
                        <?php $i++; ?>
                                    @endforeach

                                    </ul>

                                </td>
                            </tr>
                        </tbody>
                        </table>
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
