@extends('admin.index')
@section('content')
<div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
                  <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Bootstrap Datatables</h4>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                           Launch demo modal
                           </button>
                        </div>
                        </div>
                        <div class="iq-card-body">
                           <p>Images in Bootstrap are made responsive with <code>.img-fluid</code>. <code>max-width: 100%;</code> and <code>height: auto;</code> are applied to the image so that it scales with the parent element.</p>
                           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel" style="color:black;">Modal title</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <form method="POST" action="{{ route('recomentdation.store') }}" role="form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name" style="color:black;">Input Name </label>
                                             <input type="text" class="form-control" id="name" name="name"placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="url" style="color:black;">Input Url </label>
                                             <input type="text" class="form-control" id="url" name="url" placeholder="Enter Url">
                                        </div> 
                                        <div class="form-group">
                                 <label for="category_id" style="color:black;">Select Input</label>
                                 <select class="form-control" id="category_id" name="category_id">
                                        <option value="1">Flex Hitam</option>
                                        <option value="2">Jerawat</option>
                                        <option value="3">Rosacea</option>
                                 </select>
                              </div> 
                              <div class="form-group">
                                 <label for="deskripsi" style="color:black;">Example textarea</label>
                                 <textarea class="form-control" id="deskripsi" rows="4" name="deskripsi"></textarea>
                              </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1"style="color:black;">Example file input</label>
                                             <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>

                                    </div>                                    
                              </div>
                           </div>
                        <div class="table-responsive">
                              <table id="datatable" class="table table-striped table-bordered" >
                       <thead>
                           <tr>
                               <th>ID</th>
                               <th>Name</th>
                               <th>Category</th>
                               <th>Url</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                       @foreach($recomentdation as $data)
                           <tr>
                               <td>{{$data -> id}}</td>
                               <td>{{$data -> name}}</td>
                               <td>
                                   @if($data -> category_id == 1)
                                   <span>Flex Hitam</span>
                                   @elseif($data -> category_id == 2)
                                   <span>Jerawat</span>
                                   @elseif($data -> category_id == 3)
                                   <span>Rossacea</span>
                                   @endif
                               </td>
                               <td>{{$data -> url}}</td>
                               <td>
                               <form action="{{ route('recomentdation.destroy', $data->id) }}" method="post"
                                            class="sa-remove" id="data-{{ $data->id }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                        <button onclick="deleteRow({{ $data->id }})"
                                            class="btn btn-danger waves-effect waves-lightr"><i
                                            class="bx bx-block font-size-16 align-middle me-2"></i>Delete</button>
                               </td>
                           </tr>
                        @endforeach
                       </tbody>
                   </table>
                           </div>
                        </div>
                     </div>
            </div>
         </div>
         
      </div>
@endsection
<script>
        function deleteRow(id) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $('#data-' + id).submit();
                }
            })
        }

    </script>