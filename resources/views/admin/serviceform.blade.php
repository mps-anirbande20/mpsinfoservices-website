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

                        {{url('/admin/service/update/'.$data->id)}}

                        @else

                        {{url('/admin/service/store')}}

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

                                        <label class="col-lg-3 col-form-label">Price</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="price" value="{{isset($data)?$data->price:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Supply</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="supply" value="{{isset($data)?$data->supply:''}}">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Unit</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" required name="unit" value="{{isset($data)?$data->unit:''}}">

                                        </div>

                                    </div>

                                    @for($i=1;$i<6;$i++)

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Feature {{$i}}</label>

                                        <div class="col-lg-9">

                                            <input type="text" class="form-control" name="feature{{$i}}" value="@php
                                            $feature = 'feature'.$i;
                                            echo isset($data)&&$data->$feature!=''?$data->$feature:'';
                                            @endphp">

                                        </div>

                                    </div>

                                    @endfor

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">City</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" required multiple name="city[]">

                                                <option value="">Select Cities</option>

                                                @if($cities)

                                                    @foreach($cities as $cat)

                                                <option value="{{$cat->id}}" {{isset($data)&&in_array($cat->id,explode(',',$data->city))?'selected':''}}>{{$cat->title_en}}</option>

                                                    @endforeach

                                                @endif

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Image</label>

                                        <div class="col-lg-9">

                                            @php $required = !isset($data)?'required':''; @endphp

                                            <input type="file" {{$required}} class="form-control" name="image">

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Category</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" required name="category">

                                                <option value="">Select Category</option>

                                                @if($categories)

                                                    @foreach($categories as $cat)

                                                <option value="{{$cat->id}}" {{isset($data)&&$data->category==$cat->id?'selected':''}}>{{$cat->title_en}}</option>

                                                    @endforeach

                                                @endif

                                            </select>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Company</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" name="brand">

                                                <option value="">Select Company</option>

                                                @if($brands)

                                                    @foreach($brands as $cat)

                                                <option value="{{$cat->id}}" {{isset($data)&&$data->brand==$cat->id?'selected':''}}>{{$cat->title_en}}</option>

                                                    @endforeach

                                                @endif

                                            </select>

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

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Details</label>

                                        <div class="col-lg-9">

                                            <textarea class="form-control" name="details">{{isset($data)?$data->details:''}}</textarea>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Address</label>

                                        <div class="col-lg-9">

                                            <textarea class="form-control" name="address">{{isset($data)?$data->address:''}}</textarea>

                                        </div>

                                    </div>

                                    <div class="form-group row">

                                        <label class="col-lg-3 col-form-label">Binding</label>

                                        <div class="col-lg-9">

                                            <select class="form-control" name="binding">

                                                <option value="">Select from List</option>

                                                <option value="Binding" {{isset($data)&&$data->binding=='Binding'?'selected':''}}>Binding</option>

                                                <option value="Non-Binding"{{isset($data)&&$data->binding=='Non-Binding'?'selected':''}}>Non-Binding</option>

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