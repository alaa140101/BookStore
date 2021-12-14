@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">عربة التسوق</div>
          <div class="card-body">
            @if ($items->count())
                <table class="table">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">العنوان</th>
                      <th scope="col">السعر</th>
                      <th scope="col">الكمية</th>
                      <th scope="col">السعر الكلي</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  @php($totalPrice = 0)
                    @foreach ($items as $item)
                      @php($totalPrice += $item->price * $item->pivot->number_of_copies)
                        <tbody>
                          <tr>
                            <th scope="row">{{ $item->title }}</th>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->pivot->number_of_copies }}</td>
                            <td>{{ $item->price * $item->pivot->number_of_copies }}</td>
                            <td>
                              <form action="{{ route('cart.remove_all', $item->id) }}" style="float:left; margin: auto 5px" method="post">
                              @csrf
                              <button class="btn btn-danger btn-sm" type="submit">أزل الكل</button>
                              </form>
                              <form action="{{ route('cart.remove_one', $item->id) }}" style="float:left; margin: auto 5px" method="post">
                              @csrf
                              <button class="btn btn-warning btn-sm" type="submit">أزل واحدا</button>
                              </form>
                            </td>
                          </tr>
                        </tbody>
                    @endforeach
                </table>
                <h4>المجموع النهائي: {{ $totalPrice }}</h4>
                <div id="paypal-button-container" style="width: 20px"></div>
                @else 
                <h1>لا يوجد كتب في العربة</h1>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection

@section('script')
<script src="https://www.paypal.com/sdk/js?client-id=AV1hLmmCCiDjt3Wo7CuhSmZlba26KmwVdocffVMc0exNpQRVyXGEBlggMVVX_WS9lCPHOWekj8hfunf8"></script>
<script>
paypal.Buttons({

// Sets up the transaction when a payment button is clicked
createOrder: function(data, actions) {
  return actions.order.create({
    purchase_units: [{
      amount: {
        value: '20' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
      }
    }]
  });
},

// Finalize the transaction after payer approval
onApprove: function(data, actions) {
  return actions.order.capture().then(function(orderData) {
    // Successful capture! For dev/demo purposes:
        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
        var transaction = orderData.purchase_units[0].payments.captures[0];
        alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');

    // When ready to go live, remove the alert and show a success message within this page. For example:
    // var element = document.getElementById('paypal-button-container');
    // element.innerHTML = '';
    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
    // Or go to another URL:  actions.redirect('thank_you.html');
  });
}
}).render('#paypal-button-container');</script>    
@endsection