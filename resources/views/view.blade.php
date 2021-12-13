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
                </table>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection