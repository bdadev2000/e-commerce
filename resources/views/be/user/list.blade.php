@extends('be.layout')

@section('main-content')
<div class="col-md-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>FullName</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($list as $item)
                        <tr>
                            <td>
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                            <td>
                                {{ $item->full_name }}
                            </td>
                            <td>
                                {{ $item->address }}
                            </td>
                            <td>
                              <a href="{{ route('admin.user.edit',['id'=>$item->id]) }}" class="btn btn-warning">Edit</a>
                              <a 
                                href="{{ route('admin.user.delete',['id'=>$item->id]) }}" 
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete?')"
                              >
                                Delete
                              </a>
                            </td>
                        </tr>
                      @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <div class="float-right">
                    {{ $list->links() }}
                </div>
                
              </div>
            </div>
            <!-- /.card -->
          </div>
@endsection