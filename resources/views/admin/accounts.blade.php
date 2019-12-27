@extends('admin.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Users</li>
@endsection
@section('content')
<div class="row d-block">
    <div class="col-sm-12">
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
        @endif
    </div>
</div><div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h2 class="h2">Users Accounts</h2>
<div class="btn-toolbar mb-2 mb-md-0">
    {{--<a href="{{route('product.create')}}" class="btn btn-sm btn-outline-secondary">
        Add Product
    </a>--}}
</div>
</div>
<div class="table-responsive">
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Email</th>
            <th>Picture</th>
            <th> Status </th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    @if($users->count() > 0)
    @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td><img src = {{asset($user->avatar)}}></td>
        <td>{{$user->status}}</td>
        <td>{{$user->created_at}}</td>
        <td><a class="btn btn-outline-success btn-sm" href="#">Activate</a> |
        <a class="btn btn-outline-danger btn-sm" href="#">Deactivate</a> |
        <form action="{{ route('users.destroy', $user->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
@else
<tr>
    <td colspan="8" class="alert alert-info">No users Found..</td>
</tr>
@endif
</tbody>
</table>
</div>
<div class="row">
<div class="col-md-12">
</div>
</div>
@endsection
<script type="text/javascript">
function confirmDelete(id){
let choice = confirm("Are You sure, You want to Delete this Order ?")
if(choice){
document.getElementById('delete-product-'+id).submit();
}
}
</script>