@extends('layouts.firstuser')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Skill </strong>
                    <small> Details</small>
                </div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                <form action="{{ route('FirstSkillStore')}}" method="post">
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
                        <label for="title" class=" form-control-label">Skill Name</label>
                        <input type="text" id="title" placeholder="Enter your Skill " class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="level" class=" form-control-label">Level</label>
                        <select class="form-control" name="level" id="level">
                            <option value="5">Excellent</option>
                            <option value="3">Good</option>
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