@extends('layouts.master_admin')
@section('title')
    Photos
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">All Photos</h2>
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <!-- data table  -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <form enctype="multipart/form-data" action="{{action('Admin\PhotosController@deleteAll')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <a href="{{action('Admin\PhotosController@create_photo_page')}}" class="btn btn-sm btn-primary mb-0">Add Photos</a>&nbsp;

                    <button type="submit" class="btn btn-sm btn-secondary mb-0 delete_all" id="formSubmit" onclick="return confirm('Are you want to delete this records?')" disabled>Delete All Selected</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead class="thead-dark">
                            <tr>
                                <th><input type="checkbox" id="master" onchange="document.getElementById('formSubmit').disabled = !this.checked;"> &nbsp; Select All</th>
                                <th>Date</th>
                                <th>Photographer</th>
                                <th>Image</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $row)
                                <tr>
                                    <td><input type="checkbox" class="sub_chk" name="photos[]" value="{{$row->galleryID}}" onchange="document.getElementById('formSubmit').disabled = !this.checked;"></td>
                                    <td>{{$row->created_at->format('d/m/y')}}</td>
                                    <td>{{$row->photographer['name']}}</td>
                                    <td><img width="50" height="40" src="{{asset('public/uploads/gallery/'.$row->images)}}" alt=""></td>
                                    <td class="text-right">
                                        <a href="{{action('Admin\PhotosController@del',['id'=>$row->galleryID])}}" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-space btn-secondary text-white p-0 pl-1 pr-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {


            $('#master').on('click', function(e) {
                if($(this).is(':checked',true))
                {
                    $(".sub_chk").prop('checked', true);
                } else {
                    $(".sub_chk").prop('checked',false);
                }
            });
        });
    </script>
@endsection
