@extends('master')
@section('title', 'Master Court Type')
@section('content-title', 'Master Court-Types')
@section('content')
<div class="row">
    <div class="col-md-8">
        <a class="btn btn-success" href="">Add</a>
       <table class="table">
            <tr>
                <td>No</td>
                <td>Court Type</td>
                <td>Court Name</td>
                <td>Action</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
       </table>
    </div>
    <div class="col-md-4">
        
    </div>
</div>
@endsection