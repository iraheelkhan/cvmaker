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
                    <strong>Language</strong>
                    <small> Details</small>
                    <a href="{{route("LanguageAdd")}}" class="btn btn-info">Add Language </a>
                    <button  type="button" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">delete</button >
                    <button  type="button" data-toggle="modal" data-target="#ajaxModal" class="btn btn-warning">Add by Ajax</button >
                </div>
                
                <div class="card-body card-block">
                    @foreach($data as $lang)
                    <table border="1" width="100%">
                        <tr>
                            <td style="width: 50%">Language Name</td>
                            <td style="width: 50%">{{$lang->name}} </td>
                        </tr>
                        <tr>
                            <td>Level</td>
                            <td>{{$lang->level}}</td>
                        </tr>
                        <tr>
                            <td>Action </td>
                            <td>
                                <form method="post" action="{{route('LanguageDelete')}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$lang->id}}">
                                    <button type="submit" class="btn btn-danger">Delete </button>
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
        @foreach($data as $lang)
            <table id="modalDeleteTable">
                <tr>
                    <td width="200px">{{$lang->name}}</td>
                    <td width="100px">
                        <form method="post" action="{{route('LanguageDelete')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$lang->id}}">
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

{{-- second modal for the ajax is goes here --}}
<div class="modal fade" id="ajaxModal" tabindex="" role="dialog" aria-labelledby="ajaxModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajaxModalLongTitle">Delete Educations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form >
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
                        <input class="form-control btn btn-primary" id="add" type="submit" name="submit">
                    </div>  
                    </div>
                </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).on('click','#add', function(event){
        event.preventDefault();
        var name = $('#name').val();
        var level = $('#level').val();
        $.ajax({
            type: 'POST',
            url: '{{route("LanguageAddMore")}}',
            data: {
                    name:name,
                    level:level,
                    '_token': "{{csrf_token()}}"
            },
            success: function (data) {
                if(data.flag == 1){
                   swal("Added","Language Added","success");
                }
                else if(data.flag == 2){
                    swal("no no no","Language Added","error");
                }
            },
            error: function (data){
                swal("hahah","Language Added","error");
            }
        });

    });
</script>
@endsection