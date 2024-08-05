@extends('admin.main')

@section('admin')

    <!-- Begin Page Content -->
    <div class="container-fluid bg-white col-6" style="float: left; margin-left: 50px; padding-top: 50px; padding-bottom: 50px;">
        <div class="col-xl-11 col-md-11 mb-10">
            <form method="POST" action="{{ route('survey_update') }}">
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}">
                    <label for="inputAddress">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $data->title }}">
                    @error('title')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="details" name="details" rows="3">{{ $data->details }}</textarea>
                    @error('details')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update Survey</button>
            </form>
        </div>
    </div>

    <!-- /.container-fluid -->

@endsection

