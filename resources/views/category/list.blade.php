@extends('layout.index')

@section('title', 'List Category')
    
@section('content')
<input type="text" id="search" onkeyup="search()" placeholder="Search...">

<div class="card">
    <div class="container">
        <a href="{{ 'category/create' }}" class="btn info">Add</a>
        <table class="mt-3" id="table-list">
            <thead>
                <tr class="table-header">
                    <th style="width: 5%;">No</th>
                    <th style="width: 55%;">Name</th>
                    <th style="width: 20%;">Is Publish</th>
                    <th style="width: 20%;">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['is_publish'] == 1 ? 'True' : 'False' }}</td>
                    <td>
                        <a href="{{ 'category/'.$row['id'].'/edit' }}" class="btn-sm success">Edit</a>
                        <form action="{{ URL::to('api/category/' . $row['id']) }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn-sm danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            {{ $category->links() }}
    </div>
</div>
@endsection
