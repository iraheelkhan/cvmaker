@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Certification </strong>
                    <small> Details</small>
                </div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                <form action="{{ route('CertificationUpdate')}}" method="post">
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
                        <label for="title" class=" form-control-label">Certification Title</label>
                        <input type="text" id="title" placeholder="Enter your Certification title" class="form-control" value="{{!old('title')?$data->title : old('title')}}" name="title">
                    </div>
                    <div class="form-group">
                        <label for="year" class=" form-control-label">Completion Year</label>
                        <input type="text" id="year" placeholder="2019" class="form-control" value="{{!old('year')?$data->year : old('year')}}" name="year">
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                    <div class="form-group">
                        <label for="duration" class=" form-control-label">Duration of Certification</label>
                        <input type="text" id="duration" placeholder="22 " class="form-control"  value="{{!old('duration')?$data->duration : old('duration')}}"  name="duration">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="duration_prefix" class=" form-control-label">Duration of Project</label>
                        <select   value="{{!old('duration_prefix')?$data->duration_prefix : old('duration_prefix')}}"}}"  class="form-control" name="duration_prefix">
                            <option value="days">Days</option>
                            <option value="months">Months</option>
                            <option value="years">Years</option>
                        </select>
                    </div>
                </div>
            </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="institute" class=" form-control-label">Institute    </label>
                                <input   value="{{!old('institute')?$data->institute : old('institute')}}"  type="text" id="institute" placeholder="Enter institute Name" class="form-control" name="institute">
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