@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Language </strong>
                    <small> Details</small>
                </div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                <form action="{{ route('LanguageAddMore')}}" method="post">
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
                        <label for="name" class=" form-control-label">Language Name</label>
                        <input type="text" id="name" placeholder="Enter your Language " class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="level" class=" form-control-label">Level</label>
                        <select class="form-control" name="level" id="level">
                            <option value="5">Excellent</option>
                            <option value="4">Fluent</option>
                            <option value="2">Good</option>
                            <option value="1">Understand</option>
                        </select>
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