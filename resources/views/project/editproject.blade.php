@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Project </strong>
                    <small> Details</small>
                </div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                <form action="{{ route('ProjectUpdate')}}" method="post">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    {{csrf_field()}}
                <div class="card-body card-block">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                    <div class="form-group">
                        <label for="project_title" class=" form-control-label">Project Title</label>
                        <input type="text" id="project_title" placeholder="Enter your project title" class="form-control" value="{{!old('project_title')?$data->title : old('project_title')}}"  name="project_title">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Project Description</label>
                        <input type="text" id="description" placeholder="Enter your project title" class="form-control" value="{{!old('description')?$data->description : old('description')}}"  name="description">
                    </div>
                    <div class="form-group">
                        <label for="duration" class=" form-control-label">Duration of Project</label>
                        <input type="text" id="duration" placeholder="22 " value="{{!old('duration')?$data->duration : old('duration')}}"  class="form-control" name="duration">
                    </div>
                    <div class="form-group">
                        <label for="duration_prefix" class=" form-control-label">Duration of Project</label>
                        <select value="{{!old('duration_prefix')?$data->duration_prefix : old('duration_prefix')}}"  class="form-control" name="duration_prefix">
                            <option value="days">Days</option>
                            <option value="months">Months</option>
                            <option value="years">Years</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="details" class=" form-control-label">Project Details</label>
                        <input value="{{!old('details')?$data->details : old('details')}}"  type="text" id="details" placeholder="Enter your job details" class="form-control" name="details">
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="company" class=" form-control-label">Company</label>
                                <input value="{{!old('company')?$data->company : old('company')}}"  type="text" id="company" placeholder="Enter Company Name" class="form-control" name="company">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="form-control btn btn-primary" type="submit" name="submit">
                    </div>  
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection