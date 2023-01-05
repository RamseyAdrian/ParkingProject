@extends('firebase.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Contact
                        <a href="{{ url('contacts') }}" class="btn btn-sm btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-contact/'.$key) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>First Name</label>
                            <input type="text" name="first_name" value="{{ $editdata['fname'] }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="{{ $editdata['lname'] }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone Number</label>
                            <input type="text" name="phone" value="{{ $editdata['phone'] }}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email Address</label>
                            <input type="text" name="email" value="{{ $editdata['email'] }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection