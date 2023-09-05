@extends('admin.layout.master')

@push('plugin-styles')
    <link href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Special pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Faq</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Sample Page</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
@endpush

@push('custom-scripts')
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
@endpush
