@extends('layout.app')

@section('title')
    Dashboard - Admin
@endsection

@push('addons-css')
@endpush

@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card card-statistic-2" style="height: 134px !important">
                        <div class="card-stats mt-3">
                            <div class="card-stats-title text-center">
                                <h6>Total Post</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('addons-js')
@endpush
