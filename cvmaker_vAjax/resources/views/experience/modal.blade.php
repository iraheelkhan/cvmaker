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