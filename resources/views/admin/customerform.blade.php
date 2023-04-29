@section('title')
{{$page}}
@endsection
@extends('admin.layout')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <!-- Page Content -->
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Admin!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">{{$page}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">{{$page}} Information</h4>
                    </div>
                    <div class="card-body">
                        @if(session()->get('completed'))
                            <div class="alert alert-success">
                                {{ session()->get('completed') }}  
                            </div><br />
                        @endif
                        <form method="post" action="@isset($data)
                        {{url('/admin/customer/update/'.$data->user)}}
                        @else
                        {{url('/admin/customer/store')}}
                        @endisset" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" readonly class="form-control" name="name" value="{{isset($data)?$data->name:''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" readonly name="phone" value="{{isset($data)?$data->phone:''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" readonly class="form-control" name="email" value="{{isset($data)?$data->email:''}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Status</label>
                                        <div class="col-lg-9">
                                            <select class="form-control" name="status">
                                                <option value="1" {{isset($data)&&$data->status=='1'?'selected':''}}>Active</option>
                                                <option value="0" {{isset($data)&&$data->status=='0'?'selected':''}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>@csrf
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Page Content -->
</div>
<!-- /Page Wrapper -->
@endsection