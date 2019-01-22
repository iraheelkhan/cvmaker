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
                    <strong>Users</strong>
                    <small> Details</small>
                    <a href="" class="btn btn-info">Add Education </a>
                    <button  type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">delete</button >
                </div>

                <div class="card-body card-block">
                    <table id="usertableview" class="display">
                        <thead>
                            <th>No</th>
                            <th>Name</th>
                            <th>role</th>
                            <th>email</th>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                            @foreach($data as $user)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- model goes here --}}
<!-- Modal -->
<script type="text/javascript">
    $(document).ready(function() {
    $('#usertableview').DataTable();
} );
</script>
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
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
