<div class="row">

@if ($rows[0]->method=='Bank')

<div class="col-md-6"><h3><b>Method : </b> <span>{{ $rows[0]->method }}</span></h3></div>
<div class="col-md-6"><h3><b>Name : </b> <span>{{ $rows[0]->name }}</span></h3></div>
<div class="col-md-6"><h3><b>Brance Name : </b> <span>{{ $rows[0]->brance_name }}</span></h3></div>
<div class="col-md-6"><h3><b>Account Name : </b> <span>{{ $rows[0]->account_name }}</span></h3></div>
<div class="col-md-6"><h3><b>Account Number : </b> <span>{{ $rows[0]->account_Number }}</span></h3></div>
<div class="col-md-6"><h3><b>Payment Date : </b> <span>{{ $rows[0]->Payment_Date }}</span></h3></div>
<div class="col-md-6"><h3><b>Amount : </b> <span>{{ $rows[0]->amount }}</span></h3></div>
<div class="col-md-6"><h3><b>Emergency Contact Number: </b> <span>{{ $rows[0]->Emergency }}</span></h3></div>
<div class="col-md-6"><h3><b>Date : </b> <span>{{ $rows[0]->updated_at }}</span></h3></div>
@else

<div class="col-md-6"><h3><b>Method : </b> <span>{{ $rows[0]->method }}</span></h3></div>
<div class="col-md-6"><h3><b>Payment Number : </b> <span>{{ $rows[0]->number }}</span></h3></div>
<div class="col-md-6"><h3><b>Amount : </b> <span>{{ $rows[0]->amount }}</span></h3></div>
<div class="col-md-6"><h3><b>TRXID : </b> <span>{{ $rows[0]->TRXID }}</span></h3></div>
<div class="col-md-6"><h3><b>Date : </b> <span>{{ $rows[0]->updated_at }}</span></h3></div>
@endif






</div>
