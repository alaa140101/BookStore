@extends('theme.default')

@section('head')
<link href="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" >
@endsection

@section('heading')
عرض الكتاب    
@endsection

@section('content')
  <a href="{{ route('books.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i>اضف كتابا جديد</a>    
  <hr>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-stribed text-right" id="books-table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>العنوان</th>
            <th>الرقم التسلسلي</th>
            <th>التصنيف</th>
            <th>المؤلفون</th>
            <th>الناشر</th>
            <th>السعر</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
            <tr>
              <td><a href="{{route('books.show', $book)}}">{{ $book->title }}</a></td>
              <td>{{ $book->isbn }}</td>
              <td>{{ $book->category != null ? $book->category->name : '' }}</td>
              <td>
                @if ($book->authors()->count() > 0)
                  @foreach ($book->authors as $author)
                    {{ $loop->first ? '' : 'و'}}
                    {{ $author->name }}                         
                  @endforeach                    
                @endif
              </td>
              <td>{{ $book->publisher != null ? $book->publisher->name : '' }}</td>
              <td>{{ $book->price }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection

@section('script')
<script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}"></script>    
<script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>   
<script>
  $(document).ready(function() {
    $('#books-table').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/ar.json"
      }
    });
  });
</script> 
@endsection