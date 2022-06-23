@extends('admin/layout.layout')
@section('page_title', 'Manage Committee')

@section('container')


    <div class="page-title">
        <div class="title_left">
            <h3>Manage Committee</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                <div class="input-group">

                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">

                <div class="x_content">
                    <br />


                    @foreach ($rows as $row)
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method='post'
                            action="{{ route('committee.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" id="id" value="{{ $row->id }}">
                            <input type="hidden" name="committeeId" id="committeeId" value="{{ $row->committeeId }}">
                            <input type="hidden" name="status" id="status" value="{{ $row->status }}">

                            <div class="row">

                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>ছবি</label>



                                        <input class="form-control" type="file" id="committeeImage">
                                        <input type="hidden" class="form-control" name="image" id="image"
                                            value="{{ $row->image }}">


                                    </div>

                                </div>

                                <div class="col-md-5 mb-3"></div>
                                <div class="col-md-2 mb-3"><img width="100%" id="imagepreview"
                                        src="{{ base64($row->image) }}" alt=""></div>
                                <div class="col-md-5 mb-3"></div>











                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>নাম</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $row->name }}">
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>পদবি</label>
                                        <input type="text" class="form-control" name="Designation" id="Designation"
                                            value="{{ $row->Designation }}">
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>সেশন শুরু (বছর)</label>
                                        <input type="text" class="form-control" name="session_start" id="session_start"
                                            @if (count(explode('-', $row->session_start)) == 2) value="{{ explode('-', $row->session_start)[0] }}" @endif>
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>সেশন শেষ (বছর)</label>
                                        <input type="text" class="form-control" name="session_end" id="session_end"
                                            value="{{ $row->session_end }}">
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>বয়স</label>
                                        <input type="text" class="form-control" name="age" id="age"
                                            value="{{ $row->age }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>জন্ম তারিখ</label>
                                        <input type="date" class="form-control" name="dob" id="dob"
                                            value="{{ $row->dob }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>পিতার/স্বামীর নাম</label>
                                        <input type="text" class="form-control" name="father_name" id="father_name"
                                            value="{{ $row->father_name }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>শিক্ষাগত যোগ্যতা</label>
                                        <input type="text" class="form-control" name="education" id="education"
                                            value="{{ $row->education }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>পেশা</label>
                                        <input type="text" class="form-control" name="occupation" id="occupation"
                                            value="{{ $row->occupation }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>সদস্যের ছোট বিবরণ </label>

                                        <textarea name="shortbio" id="shortbio" cols="30" class="form-control" rows="4">{{ $row->shortbio }}</textarea>


                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>সদস্যের বিবরণ </label>

                                        <textarea name="bio" id="bio" cols="30" class="form-control" rows="10">{{ $row->bio }}</textarea>


                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ফোন নাম্বর</label>
                                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber"
                                            value="{{ $row->phoneNumber }}">
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ইমেইল</label>
                                        <input type="text" class="form-control" name="email" id="email"
                                            value="{{ $row->email }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ওয়েবসাইট</label>
                                        <input type="text" class="form-control" name="website" id="website"
                                            value="{{ $row->phoneNumber }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>পেশাগত ঠিকানা</label>
                                        <input type="text" class="form-control" name="pesahgot_address"
                                            id="pesahgot_address" value="{{ $row->pesahgot_address }}">
                                    </div>

                                </div>



                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>সামজিক উন্নয়ন পূর্ব অভিজ্ঞতা (যদি থাকে)</label>
                                        <input type="text" class="form-control" name="samagik_unoyon"
                                            id="samagik_unoyon" value="{{ $row->samagik_unoyon }}">
                                    </div>

                                </div>




                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>বিশেষ সখ (যদি থাকে)</label>
                                        <input type="text" class="form-control" name="hobby" id="hobby"
                                            value="{{ $row->hobby }}">
                                    </div>

                                </div>






                                <div class="col-md-12">
                                    <h3>স্থায়ী ঠিকানা</h3>
                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>গ্রাম</label>
                                        <input type="text" class="form-control" name="pr_vill" id="pr_vill"
                                            value="{{ $row->pr_vill }}">
                                    </div>

                                </div>
                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ডাকঘর</label>
                                        <input type="text" class="form-control" name="pr_post" id="pr_post"
                                            value="{{ $row->pr_post }}">
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>থানা/উপজেলা</label>
                                        <input type="text" class="form-control" name="pr_thana" id="pr_thana"
                                            value="{{ $row->pr_thana }}">
                                    </div>

                                </div>

                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>জেলা</label>
                                        <input type="text" class="form-control" name="pr_dist" id="pr_dist"
                                            value="{{ $row->pr_dist }}">
                                    </div>

                                </div>


                                <div class="col-md-12">
                                    <h3>বর্তমান ঠিকানা</h3>
                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>গ্রাম</label>
                                        <input type="text" class="form-control" name="pr_vill" id="pr_vill"
                                            value="{{ $row->pr_vill }}">
                                    </div>

                                </div>

                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>ডাকঘর</label>
                                        <input type="text" class="form-control" name="p_post" id="pr_post"
                                            value="{{ $row->pr_post }}">
                                    </div>

                                </div>


                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>থানা/উপজেলা</label>
                                        <input type="text" class="form-control" name="p_thana" id="pr_thana"
                                            value="{{ $row->pr_thana }}">
                                    </div>

                                </div>

                                {{-- col-md-6 start --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>জেলা</label>
                                        <input type="text" class="form-control" name="p_dist" id="pr_dist"
                                            value="{{ $row->pr_dist }}">
                                    </div>

                                </div>



                            </div>











                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">

                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    @endforeach



                </div>
            </div>
        </div>
    </div>


@endsection
