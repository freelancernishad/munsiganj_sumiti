
                    <div class="sidebar">
                        <ul class="sidebarmenu list-unstyled">
                            <li><a href="{{ url('info/Historical Info') }}">Historical Info</a></li>
                            <li><a href="{{ url('info/District Info') }}">District Info</a></li>
                            <li class="sidebar_dropdown" >
                                <a href="#">Educational Info &nbsp; <i class="fal fa-chevron-right"></i></a>
                                <ul class="sidebar_dropdownList list-unstyled">
                                    <li><a href="{{ url('info/Educational History') }}">Educational History</a></li>
                                    <li><a href="{{ url('info/High School') }}">High School</a></li>
                                    <li><a href="{{ url('info/Collage Univercity') }}">Collage/Univercity</a></li>
                                    <li><a href="{{ url('info/Madrasa') }}">Madrasa</a></li>
                                    <li><a href="{{ url('info/Medical College') }}">Medical College</a></li>
                                    <li><a href="{{ url('info/Technical Institute') }}">Technical Institute</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ url('HistoricalPlace') }}">Historical Place</a></li><!--  new -->
                            <li><a href="{{ url('info/Historical Village') }}">Historical Village Info</a></li><!--  new -->
                            <li><a href="{{ url('info/Local Professional Info') }}">Local Professional Info</a></li><!--  new -->





                            <li><a href="{{ url('ProminentPersons') }}">Prominent Persons</a></li> <!--  chnage -->
                            <li><a href="{{ url('ParliamentaryPersons') }}">Parliamentary Persons Profile</a></li> <!--  new -->
                            <li><a href="{{ url('info/Agricaltural Info') }}">Agricaltural Info</a></li>
                            <li><a href="{{ url('info/Medical Info') }}">Medical Info</a></li>
                            <li><a href="{{ url('info/Cultural') }}">Cultural</a></li>
                            <li><a href="{{ url('info/Sports') }}">Sports</a></li>
                            <li><a href="{{ url('info/Tourism') }}">Tourism</a></li>
                            <li><a href="{{ url('info/Local Language') }}">Local Language</a></li>
                            <li><a href="{{ url('info/Vhaban Hostel') }}">Vhaban/Hostel</a></li>
                            <li><a href="{{ url('info/Probashi') }}">Probashi</a></li>

                        </ul>

<style>
    .adcontact {
    margin: 11px 15px;
    font-size: 20px;
}
</style>
                        <div class="adcontact">
<img width="100%" src="{{ asset(env('FILE_PATH').'logo/'.settings()[0]->Advertisement) }}" alt="">




                        </div>


                        <div class="ifameVideo">
{!! video()->iframe !!}
<h3 style="text-align: center"><a href="{{  video()->link  }}">{{  video()->title  }}</a></h3>




                        </div>

                    </div>
