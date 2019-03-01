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
                    <strong>Project</strong>
                    <small> Details</small>
                    <a href="{{route('ProjectAdd')}}" class="btn btn-info">Add Project </a>
                    <button  type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">delete</button >
                </div>

                <div class="card-body card-block">
                    @foreach($data as $project)
                    <table border="1" width="100%">
                        <tr>
                            <td style="width: 50%">Name</td>
                            <td style="width: 50%">{{$project->title}} </td>
                        </tr>
                        <tr>
                            <td>Descripton</td>
                            <td>{{$project->description}}</td>
                        </tr>
                        <tr>
                            <td>Company</td>
                            <td>{{$project->company}}</td>
                        </tr>
                        <tr>
                            <td>Details</td>
                            <td>{{$project->details}}</td>
                        </tr>
                        <tr>
                            <td>Duration</td>
                            <td>{{$project->duration}} {{$project->duration_prefix}}</td>
                        </tr>
                        <tr>
                            <td>Action </td>
                            <td>
                                <form method="post" action="{{route('ProjectEdit')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$project->id}}">
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

{{-- model goes here --}}
<!-- Modal -->

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
        @foreach($data as $project)
            <table id="modalDeleteTable">
                <tr>
                    <td width="200px">{{$project->title}}</td>
                    <td width="100px">
                        <form method="post" action="{{route('ProjectDelete')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$project->id}}">
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
