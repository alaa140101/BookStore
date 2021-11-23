@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">عرض تفاصيل الكتاب</div>

                <div class="card-body">
                   <table class="table table-stribed">
                     <tr>
                       <th>العنوان</th>
                       <td class="lead"><b>{{ $book->title}}</b></td>
                     </tr>

                     @if ($book->isbn)
                      <tr>
                        <th>الرقم التسلسلي</th>
                        <td>{{ $book->isbn }}</td>
                      </tr>
                     @endif
                     <tr>
                       <th>صورة الغلاف</th>
                       <td><img src="{{ asset('storage/' . $book->cover_image) }}" alt="" class="img-fluid img-thumbnail"></td>
                     </tr>
                     @if ($book->category)
                     <tr>
                       <th>التصنيف</th>
                       <td>{{ $book->category->name }}</td>
                     </tr>
                     @endif
                     @if ($book->authors()->count() > 0)
                         
                     @endif
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
