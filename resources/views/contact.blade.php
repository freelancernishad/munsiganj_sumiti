@extends('layouts.master')

@section('content')

    <main>
        <section class="hero_area">
            <div class="row p-0">
                <div class="col-md-3" style="background: #e6f5fa">
                    <x-sidebar />

                    <?php 


                    $adl = $adl[0]->image;
                    $adl = json_decode($adl);
                    
                    foreach($adl as $adllist){
                    
                    ?>
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adllist->name) }}" alt="" />
                    
                    <?php 
                    }
                    
                    
                    
                    ?>

                </div>


                <div class="col-md-9">





                    <?php 


                    $adtop = $adtop[0]->image;
                    $adtop = json_decode($adtop);
                    
                    foreach($adtop as $adtoplist){
                    
                    ?>
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adtoplist->name) }}" alt="" />
                    
                    <?php 
                    }
                    
                    
                    
                    ?>

<section class="committeSection py-3 pl-3">
<div class="row">
<div class="col-md-9">
    <div class="contact_form">
<h3>Contact Us</h3>

<h4>Send an enquiry</h4>

<h5>Your Details </h5>
<form action="">
<div class="form-group">
    <label>First Name (Reauired)</label>
    <input type="text" name="fname" id="fname" class="form-control" required>
</div>


<div class="form-group">
    <label>Last Name (Reauired)</label>
    <input type="text" name="lname" id="lname" class="form-control" required>
</div>



<div class="form-group">
    <label>Email (Reauired)</label>
    <input type="email" name="email" id="email" class="form-control" required>
</div>

<h5>Your enquiry </h5>


<div class="form-group">
    <label>Your enquiry (Reauired)</label>
    <textarea name="enquiry" id="enquiry" cols="30" rows="4" class="form-control" style="resize:none" required></textarea>
</div>


<h5>Additional Information</h5>


<div class="form-group">
    <label>Telephone Number</label>
    <input type="email" name="Telephone" id="Telephone" class="form-control">

</div>



<div class="form-group">
    <label>Website</label>
    <input type="email" name="Website" id="Website" class="form-control">

</div>



<div class="form-group">
    <label>Organisation Name</label>
    <input type="email" name="Organisation" id="Organisation" class="form-control">

</div>


<div class="form-group">
    <label>Job Title</label>
    <input type="text" name="job" id="job" class="form-control">

</div>


<button type="submit" class="contactBtn btn btn-info">Submit</button>


</form>


<div class="terms">

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum placeat, blanditiis commodi dolore adipisci quidem, reiciendis quae quisquam laborum totam eos ipsa et assumenda ex rem quo excepturi ratione similique.</p>
</div>


<div class="terms2">

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum placeat, blanditiis commodi dolore adipisci quidem, reiciendis quae quisquam laborum totam eos ipsa et assumenda ex rem quo excepturi ratione similique.</p>
</div>


</div>

</div>
<div class="col-md-3">
    <?php 


    $adr = $adr[0]->image;
    $adr = json_decode($adr);
    
    foreach($adr as $adrlist){
    
    ?>
    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adrlist->name) }}" alt="" />
    
    <?php 
    }
    
    
    
    ?>

</div>


</div>

</section>







                </div>
            </div>
        </section>
        <section class="adsection">
            <div class="row">

                <?php 


                $adbottom = $adbottom[0]->image;
                $adbottom = json_decode($adbottom);
                
                foreach($adbottom as $adbottomlist){
                
                ?>
              
                <div class="col-md-6 mt-3">
                    <img width="100%" src="{{ asset(env('FILE_PATH').'ad/'.$adbottomlist->name) }}" alt="" />
                </div>
                <?php 
                }
                
                
                
                ?>
               
            </div>
        </section>
    
    </main>

    @endsection