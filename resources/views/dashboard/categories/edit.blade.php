@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Editează categoria</h1>
    </div>

    <div class="col-lg-9">
        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="mb-5">
            @method('put')
            @csrf

            <div class="mb-3">
              <label for="name" class="form-label">Numele categoriei</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $category->name) }}" autofocus required>

              @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Cum va apărea</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{ old('slug', $category->slug) }}" readonly required>

                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success mt-3">Editează categoria</button>
        </form>
    </div>

    @include('dashboard.layouts.categoryScript')
@endsection