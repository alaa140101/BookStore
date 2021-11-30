@extends('theme.default')

@section('heading')
إضافة كتاب جديد    
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="card mb-4 col-md-8">
    <div class="card-header text-right">
      اضف كتابا جديد
    </div>
    <div class="card-body">
      <form action="{{ route('books.index') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>
          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="isbn" class="col-md-4 col-form-label text-md-right">الرقم التسلسلي</label>
          <div class="col-md-6">
            <input id="isbn" type="text" class="form-control @error('isbn') is-invalid @enderror" name="isbn" value="{{ old('isbn') }}" autocomplete="isbn">
            @error('isbn')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="cover_image" class="col-md-4 col-form-label text-md-right">صورة الغلاف</label>
          <div class="col-md-6">
            <input id="cover_image" accept="image/*" type="file" class="form-control @error('cover_image') is-invalid @enderror" name="cover_image" value="{{ old('cover_image') }}" autocomplete="cover_image">
            @error('cover_image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="category" class="col-md-4 col-form-label text-md-right">التصنيف</label>
          <div class="col-md-6">
            <select name="category" id="category" class="form-control">
              <option disabled selected>اختر تصنيفا</option>
              @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>

            @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="authors" class="col-md-4 col-form-label text-md-right">المؤلفون</label>
          <div class="col-md-6">
            <select name="authors[]" id="authors" multiple class="form-control">
              <option disabled selected>اختر المؤلفين</option>
              @foreach ($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
              @endforeach
            </select>
            @error('authors')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="publisher" class="col-md-4 col-form-label text-md-right">الناشر</label>
          <div class="col-md-6">
            <select name="publisher" id="publisher" class="form-control">
              <option disabled selected>اختر ناشر</option>
              @foreach ($publishers as $publisher)
                <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
              @endforeach
            </select>
            @error('publisher')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>
          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>
          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>
          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="title" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>
          <div class="col-md-6">
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
    
@endsection