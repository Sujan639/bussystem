@extends('admin.admin_index')
@section('main-content')
<script src="https://khalti.com/static/khalti-checkout.js"></script>
<form>
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
	<div class="form-group">
		<label>customer id</label>
	<input type="text" name="name" value="{{$r->cus_id}}" class="form-control" readonly>
</div>
	<div class="form-group">
		<label>customer name</label>
	<input type="text" name="name" value="{{Auth::user()->name}}" class="form-control" readonly>
</div>
<div class="form-group">
		<label>reservation Id</label>
	<input type="text" name="name" value="{{$r->id}}" class="form-control" readonly>
</div>
<div class="form-group">
		<label>Amount</label>
	<input type="text" name="name" value="{{$r->total_cost}}" class="form-control" readonly>
</div>



    

</form>
<!-- Place this where you need payment button -->
    <button class="btn btn-primary btn-xs"id="payment-button">Pay with Khalti</button>
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_7c2d5901f2a04db0993075d6a9dfa273",
            "productIdentity": "{{$r->id}}",
            "productName": "{{Auth::user()->name}}",
            "productUrl": "{{url('admin/cusmyreservation/'.Auth::user()->id)}}",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            checkout.show({amount: {{$r->total_cost}}*10});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
@endsection