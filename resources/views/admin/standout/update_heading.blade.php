@extends('layouts.dashboard_app')
@section('title')
    Update | Heading | Stand out | Dashboard
@endsection
@section('standout')
    active
@endsection
@section('dashboard_content')
    <!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
        <a class="breadcrumb-item" href="{{ route('out.index') }}">Stand out</a>
        <a class="breadcrumb-item active">Update Heading Stand out</a>
    </nav>
    
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Update | Heading | Stand out</h5>
        </div><!-- sl-page-title -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    @if (session('heading_update'))
                    <div class="alert alert-success">{{ session('heading_update') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">Update Heading Stand out</div>
                        <div class="card-body">
                    <form method="POST" action="{{ route('standheadingupdatepost', $heading->id) }}">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Heading</label>
                          <input type="text" class="form-control" name="heading" value="{{ $heading->heading }}">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Description</label>
                          <textarea name="description" rows="4" class="form-control">{{ $heading->description }}</textarea>
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