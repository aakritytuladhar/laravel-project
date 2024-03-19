@extends('master')
@section("content")
<div class="custom-product pt-5">
  <div class="col-sm-10">
  <div class="table-responsive">
  <table class="table">
  <tbody>
    <tr>
      <td>Amount</td>
      <td>Rs.{{$total}}</td>
    </tr>
    <tr>
      <td>Tax</td>
      <td>Rs.0</td>
    </tr>
    <tr>
      <td>Delivery</td>
      <td>Rs.60</td>
    </tr>
    <tr>
      <td>Total Amount</td>
      <td>Rs.{{$total+60}}</td>
    </tr>
  </tbody>
  </table>
  <div>
  <form action="/orderplace" method="post">
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="payment">Payment Method:</label>
    <p><input type="button" value="online" name="payment">Online Payment</p>
    <p><input type="button" value="cash"  name="payment">Cash On Delivery</p>
  </div>
  <!-- <script src="{% static 'js/footer.js' %}"></script>
<script src="{% static 'bootstrap/js/bootstrap.min.js' %}" defer></script>
    <script src="{% static 'js/scripts.js' %}"></script>
<script>
        var config = {
            "publicKey": "test_public_key_3ccd85ac24764f9081d6b8c546724d58",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                  
                    console.log(payload);
                    location.href="{% url 'payment-complete'  %}"; 

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
            checkout.show({amount: {{total}} * 100});
        }
    </script> -->
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Cash On Delivery</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Gift Now</button>
</form>
  </div>
</div>
  </div>
</div>
@endsection