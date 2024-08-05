@extends('admin.main')

@section('admin')

    <!-- Begin Page Content -->
    <div class="row">

        <div class="container">
            <!-- Content here -->
            <div class="col-9" style="float: left;">
                <h1 style="padding-left: 0px;">survey details</h1>
            </div>
            <Div class="col-3 mb-3 mr-0" style="float: left;">
                <a href="{{ route('question.question_create', $data->id) }}" class="btn btn-success">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Add Question</span>
                </a>
            </Div>
        </div>
        <div >

        </div>
        <div class="card col-10 mb-6 ml-5">
            <div class="card-body">
                <h5 class="card-title">{{ $data->title }}</h5>
                <p class="card-text" style="maxlength:20;">{{ $data->details }}</p>
                <p class="card-text"><small class="text-muted">Created at {{ $data->created_at }}</small></p>
                @foreach($question as $key => $item)
                <h5 class="card-title">Question 1</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                @endforeach
                <h5 class="card-title">Question 2</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>

            </div>
        </div>
    </div>

    <!-- /.container-fluid -->


@endsection

