@extends('master')
@section('title', 'Master Project')
@section('content-title', 'Master Project')
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header">
                <h6>Data Project</h6>
            </div>
            <div class="card-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th style="width: 30%;">Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>

                <div class="modal fade" id="detailproject">
                    <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            ...
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                          </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="card-header">
                <h6>Tambah Project</h6>
            </div>
            <div class="card-body">
                <form action="">
                    <label class="form-label" for="">Service Type</label>
                    <select class="form-select" name="" id="">
                        <option value="">Web Design</option>
                        <option value="">Web Development</option>
                        <option value="">SEO</option>
                    </select>
                    <label class="form-label" for="">Project Name</label>
                    <input class="form-control" type="text" >
                    <label class="form-label" for="">Project Date</label>
                    <input class="form-control" type="date" >
                    <label class="form-label" for="">Project Picture</label>
                    <input class="form-control" type="file">
                    <label class="form-label" for="">Decription</label>
                    <textarea class="form-control" name="" id=""></textarea>
                    <label class="form-label" for="">Project Status</label>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="radio" checked>
                        <label class="form-check-label" for="">Ongoing</label>
                    </div>
                    <div class="form-check">
                        <input name="status" class="form-check-input" type="radio">
                        <label class="form-check-label" for="">Finished</label>
                    </div>
            </div>
            <div class="card-footer">
                    <input class="btn btn-success" type="submit" value="Simpan">
                    <input class="btn btn-danger" type="button" value="Cancel">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection