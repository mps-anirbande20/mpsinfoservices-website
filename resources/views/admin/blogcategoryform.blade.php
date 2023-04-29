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

                        {{url('/admin/blogcategory/update/'.$data->id)}}

                        @else

                        {{url('/admin/blogcategory/store')}}

                        @endisset" enctype="multipart/form-data">

                            <div class="row">

                                <div class="col-xl-12">

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Title (en)</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="title_en" value="{{isset($data)?$data->title_en:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Title (fr)</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" name="title_fr" value="{{isset($data)?$data->title_fr:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Status</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" name="status">

                                                <option value="Active" {{isset($data)&&$data->status=='Active'?'selected':''}}>Active</option>

                                                <option value="Inactive"{{isset($data)&&$data->status=='Inactive'?'selected':''}}>Inactive</option>

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