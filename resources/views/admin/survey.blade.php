@extends('admin.main')

@section('admin')

    <!-- Begin Page Content -->
    <!-- Content Row -->
    <div class="row ml-2 mr-2">
        <Div class="col-xl-12 col-md-12 mb-12">
            <Div class="col-xl-3 col-md-3 mb-3">
                <a href="{{ route('admin.survey_create') }}" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                    <span class="text">Create Survey</span>
                </a>
            </Div>
        </Div>
        <!-- Earnings (Monthly) Card Example -->
        @foreach($all_data as $key => $item)
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    {{ $item->title }}</div>
                                @php
                                    $words = str_word_count($item->details, 1);
                                    $shortDescription = implode(' ', array_slice($words, 0, 80));
                                @endphp
                                <div class="mb-0" style="font-family: Arial,sans-serif; font-size: 14px; color: black;">
                                    {{ $shortDescription }}</div>
                                @if(count($words) > 80)
                                    ... <a href="{{ route('survey_details', $item->id) }}">Read more</a>
                                @endif
{{--                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $item->details }}</div>--}}
                            </div>
                            <div class="col-12" style="float: left; margin-top: 20px;">
                                <a href="{{ route('survey_details', $item->id) }}" class="btn btn-info" style="width:auto; height: auto; padding: 0px 10px 2px 10px;">
                                    <span class="text" style="font-size: 14px;">View</span>
                                </a>
                                <a href="{{ route('survey_edit', $item->id) }}" class="btn btn-warning" style="width:auto; height: auto; padding: 0px 10px 2px 10px;">
                                    <span class="text" style="font-size: 14px;">Edit</span>
                                </a>
                                <a href="{{ route('survey_delete', $item->id) }}" class="btn btn-danger" style="width:auto; height: auto; padding: 0px 10px 2px 10px;">
                                    <span class="text" style="font-size: 14px;">Delete</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- /.container-fluid -->

@endsection

