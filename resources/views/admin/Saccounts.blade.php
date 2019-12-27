@extends('admin.app')
@section('breadcrumbs')
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page">Shopkeepers</li>
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
<h2 class="h2">Shopkeeper Accounts</h2>
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
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
    </thead>
    @if($shopkeepers->count() > 0)
    @foreach($shopkeepers as $shopkeeper)
    <tr>
        <td>{{$shopkeeper->id}}</td>
        <td>{{$shopkeeper->name}}</td>
        <td>{{$shopkeeper->email}}</td>
        <td>{{$shopkeeper->avatar}}</td>
        <td>{{$shopkeeper->created_at}}</td>
        <td><a class="btn btn-outline-success btn-sm" href="#">Activate</a> |
        <a class="btn btn-outline-danger btn-sm" href="#">Deactivate</a> |
        <form action="{{ route('shopkeepers.destroy', $shopkeeper->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
@else
<tr>
    <td colspan="8" class="alert alert-info">No shopkeepers Found..</td>
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