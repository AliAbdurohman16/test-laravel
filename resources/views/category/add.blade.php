@extends('layout.index')

@section('title', 'Add Category')
    
@section('content')

<div class="card">
    <div class="container">
        <form action="action_page.php">
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
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                </select>
                </div>
            </div>
            <div class="row">
                <button type="submit" class="btn success float-right">Submit</button>
            </div>
        </form>
    </div> 
</div>

@endsection