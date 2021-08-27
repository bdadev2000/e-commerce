@extends('be.layout')

@section('main-content')
<div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('admin.user.doEdit',['id'=>$obj->id]) }}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Email address</label>
                    <input name="email" type="email" class="form-control"placeholder="Enter email" value="{{ $obj->email }}">
                  </div>
                  <div class="form-group">
                    <label>Username</label>
                    <input name="name" type="text" class="form-control"placeholder="Enter username" value="{{ $obj->name }}">
                  </div>
                  <div class="form-group">
                    <label>Full Name</label>
                    <input name="full_name" type="text" class="form-control"placeholder="Enter full name" value="{{ $obj->full_name }}">
                  </div>
                  <div class="form-group">
                    <label>Phone</label>
                    <input name="phone" type="text" class="form-control"placeholder="Enter phone" value="{{ $obj->phone }}">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control"placeholder="Enter password" value="{{ $obj->password }}">
                  </div>
                  <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value="1" <?php if($obj->level == 1){ echo 'selected=="selected"'; } ?>>Admin</option>
                        <option value="2" <?php if($obj->level == 2){ echo 'selected=="selected"'; } ?>>Staff</option>
                        <option value="3" <?php if($obj->level == 3){ echo 'selected=="selected"'; } ?>>User</option>
                    </select>
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            
</div>
@endsection