@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
@stop

@section('custom_css')

@stop

@section('content')
<div class="row">
@if($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @foreach($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </div>
@endif
</div>
<div class="col-md-12 py-3 pb-5 text-right">
    <a href="#" class="btn btn-primary" >
        <i class="fa fa-plus"></i>Create New User
    </a>
</div>
<div class="row">
    <div class="container-fluid">
        <table class="table table-stripped table-borderes">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Dob</td>
                    <td>Gender</td>
                    <td>Annual Income</td>
                    <td>Family Type</td>
                    <td>Occupation</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->dob }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->annual_income }}</td>
                    <td>{{ $user->family_type }}</td>
                    <td>{{ $user->occupation }}</td>
                    <td class="d-flex">
                        <a class="btnEdit" title="Edit" href="#"><i class="fa fa-edit"></i></a>
                        <form method="Post" action="#">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" style="border:none;" onclick="return confirm('Are you sure?')" class="text-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop

@section('custom_js')
<script type="text/javascript">
    $(document).ready(function() {
        $("body").addClass('sidebar-collapse');
    });
</script>
@stop