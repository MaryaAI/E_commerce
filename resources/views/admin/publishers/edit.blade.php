@extends('theme.default')

@section('heading')
تعديل بيانات الناشر
@endsection

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    
    <div class="card mb-4 col-md-8">
        <div class="card-header text-right">
            عدّل بيانات الناشر
        </div>
        <div class="card-body">
            <form action="{{ route('publishers.show', $publisher) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">اسم الناشر</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $publisher->name }}" required autocomplete="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">العنوان</label>

                    <div class="col-md-6">
                        <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address">{{ $publisher->address }}</textarea>
                        @error('address')
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
