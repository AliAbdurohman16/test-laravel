@extends('layout.index')

@section('title', 'Edit Category')
    
@section('content')

<div class="card">
    <div class="container">
        <form action="{{ URL::to('api/category/' . $category['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="id" value="{{ $category['id'] }}">
            <div class="row">
                <div class="col-25">
                <label for="name">Name</label>
                </div>
                <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Name.." value="{{ $category['name'] }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="ispublish">Is Publish</label>
                </div>
                <div class="col-75">
                <select id="ispublish" name="is_publish">
                    <option value="1" {{ $category['is_publish'] == 1 ? 'selected' : '' }}>True</option>
                    <option value="0" {{ $category['is_publish'] == 0 ? 'selected' : '' }}>False</option>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="float-right mt-3">
                    <a href="{{ '/' }}" class="btn success">Back</a>
                    <button type="submit" class="btn info">Submit</button>
                </div>
            </div>
        </form>
    </div> 
</div>

@endsection