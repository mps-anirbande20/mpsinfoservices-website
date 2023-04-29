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
                                {{session()->get('completed')}}  
                            </div><br />
                        @endif
                        <form method="post" action="@isset($data)
                        {{url('/admin/pages/update/'.$data->id)}}
                        @else
                        {{url('/admin/pages/store')}}
                        @endisset" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" required name="title" value="{{isset($data)?$data->title:''}}">
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
                                    @if(isset($data)&&$data->id==1)
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Content</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="homepage_about_text" id="details">{{getoption('homepage_about_text')->value}}</textarea>
                                        </div>
                                    </div>
                                    @for($x=1;$x<=4;$x++)
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">About Image {{$x}}</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control" name="homepage_about_image{{$x}}">
                                        </div>
                                    </div>
                                    @endfor
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Read More Link</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="homepage_about_link" value="{{getoption('homepage_about_link')->value}}">
                                        </div>
                                    </div>
                                    @elseif(isset($data)&&$data->id==2)

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Content 1</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="contactpage_text1">{{getoption('contactpage_text1')->value}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Content 2</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="contactpage_text2">{{getoption('contactpage_text2')->value}}</textarea>
                                        </div>
                                    </div>

                                    @else
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Banner</label>
                                        <div class="col-lg-9">
                                            <input type="file" class="form-control" name="banner">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Content</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control" name="content" id="details">{{isset($data)?$data->content:''}}</textarea>
                                        </div>
                                    </div>
                                    @endif
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