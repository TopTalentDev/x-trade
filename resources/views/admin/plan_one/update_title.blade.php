@extends('layouts.dashboard_app')
@section('title')
    Update | Plane one title | Dashboard
@endsection
@section('one')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('one.index') }}"> Plane one</a>
        <a class="breadcrumb-item active">Update Plane one title</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Plane one title</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    @if (session('update_title'))
                    <div class="alert alert-success">{{ session('update_title') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Plan title</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('homeplaneonetitleupdatepost', $title->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan parcent</label>
                          <input type="text" class="form-control" name="plan_parcent" value="{{ $title->plan_parcent }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan Time</label>
                          <input type="text" class="form-control" name="plan_time" value="{{ $title->plan_time }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan Minimum price</label>
                          <input type="text" class="form-control" name="plan_minimum" value="{{ $title->plan_minimum }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Plan Maximum price</label>
                          <input type="text" class="form-control" name="plan_maximum" value="{{ $title->plan_maximum }}">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                      </form>
                        </div>
                      </div>
                </div>
            </div>
        </div>

</div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection