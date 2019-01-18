@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                    @endif
                    <strong>Experience</strong>
                    <small> Details</small>
                    <a href="{{route('ExperienceAdd')}}" class="btn btn-info">Add Experience </a>
                    <button  type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">delete</button >
                </div>

                <div class="card-body card-block">
                    @foreach($data as $experience)
                    <table border="1" width="100%">
                        <tr>
                            <td style="width: 50%">Company Name</td>
                            <td style="width: 50%">{{$experience->company_name}} </td>
                        </tr>
                        <tr>
                            <td>Designation</td>
                            <td>{{$experience->designation}}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{$experience->title}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$experience->description}}</td>
                        </tr>
                        <tr>
                            <td>From Date</td>
                            <td>{{$experience->from_date}}</td>
                        </tr>
                        <tr>
                            <td>To Date</td>
                            <td>{{$experience->to_date}}</td>
                        </tr>
                        <tr>
                            <td>Action </td>
                            <td>
                                <form method="post" action="{{route('ExperienceEdit')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$experience->id}}">
                                    <button type="submit" class="btn btn-warning">Edit </button>
                                </form>
                            </td>
                        </tr>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
<div class="modal fade" id="deleteModal" tabindex="" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Delete Educations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @foreach($data as $experience)
            <table id="modalDeleteTable">
                <tr>
                    <td width="200px">{{$experience->designation}}</td>
                    <td width="200px">{{$experience->company_name}}</td>
                    <td width="100px">
                        <form method="post" action="{{route('ExperienceDelete')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="degree_id" value="{{$experience->id}}">
                            <button type="submit" class="btn btn-danger" v>Delete </button>
                        </form>
                        
                    </td>
                </tr>
            </table>
        @endforeach

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection