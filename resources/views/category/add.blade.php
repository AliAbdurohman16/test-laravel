@extends('layout.index')

@section('title', 'Add Category')
    
@section('content')

<div class="card">
    <div class="container">
        <form action="{{ '/' }}">
            <div class="row">
                <div class="col-25">
                <label for="name">Name</label>
                </div>
                <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Name..">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                <label for="ispublish">Is Publish</label>
                </div>
                <div class="col-75">
                <select id="ispublish" name="ispublish">
                    <option value="1">True</option>
                    <option value="0">False</option>
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