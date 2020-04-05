@extends('theme.default')

@section('heading')
تعديل بيانات المؤلف
@endsection

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    
    <div class="card mb-4 col-md-8">
        <div class="card-header text-right">
            عدّل بيانات المؤلف
        </div>
        <div class="card-body">
            <form action="{{ route('authors.show', $author) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">اسم المؤلف</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $author->name }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label text-md-right">الوصف</label>

                    <div class="col-md-6">
                        <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description">{{ $author->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row mb-0">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-primary">عدّل</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-2"></div>
</div>
@endsection
