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
                    <strong>Educational</strong>
                    <small> Details</small>
                    <a href="{{route('EducationAdd')}}" class="btn btn-info">Add Education </a>
                    <button  type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">delete</button >
                </div>

                <div class="card-body card-block">
                    @foreach($Data as $data)
                    <table border="1" width="100%">
                        <tr>
                            <td style="width: 50%">Name</td>
                            <td style="width: 50%">{{$data->name}} </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <td>From Date</td>
                            <td>{{$data->from_date}}</td>
                        </tr>
                        <tr>
                            <td>To Date</td>
                            <td>{{$data->to_date}}</td>
                        </tr>
                        <tr>
                            <td>Insitute</td>
                            <td>{{$data->institute}}</td>
                        </tr>
                        <tr>
                            <td>Passing Year</td>
                            <td>{{$data->passing_year}}</td>
                        </tr>
                        <tr>
                            <td>Percentage </td>
                            <td>{{$data->marks_percentage}} %</td>
                        </tr>
                        <tr>
                            <td>Action </td>
                            <td>
                                <form method="post" action="{{route('EducationEdit')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$data->id}}">
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
        @foreach($Data as $data)
            <table id="modalDeleteTable">
                <tr>
                    <td width="200px">{{$data->name}}</td>
                    <td width="100px">
                        <form method="post" action="{{route('EducationDelete')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="degree_id" value="{{$data->id}}">
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
