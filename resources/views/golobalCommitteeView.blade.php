
<div class="row">

@foreach ($rowsingle as $list)


<div class="col-md-4"></div>
<div class="col-md-4"><img src="{{ $list->image }}" alt=""></div>
<div class="col-md-4"></div>





<div class="col-md-6" style="margin-top: 15px;"><h4><b>Name : </b><span>{{ $list->name }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Age : </b><span>{{ $list->age }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Date Of Birth : </b><span>{{ $list->dob }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Father Name : </b><span>{{ $list->father_name }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Education : </b><span>{{ $list->education }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Occupation : </b><span>{{ $list->occupation }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Bio : </b><span>{!! $list->bio !!}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Phone Number : </b><span>{{ $list->phoneNumber }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Country : </b><span>{{ $list->country }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Email : </b><span>{{ $list->email }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Website : </b><span>{{ $list->website }}</span></h4></div>
<div class="col-md-6" style="margin-top: 15px;"><h4><b>Professional address : </b><span>{{ $list->pesahgot_address }}</span></h4></div>



@endforeach
</div>
