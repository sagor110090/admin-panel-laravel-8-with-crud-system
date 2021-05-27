@extends('layouts.app',['pageTitle' => __(' Site Setting Edit')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Site Setting') }}
    @endslot
@endcomponent


<div class="card">
    <div class="card-header">{{ __('Edit  Site Setting') }}</div>
    <div class="card-body">
        <a href="#" onclick="history.back()" title="Back"><button
            class="btn btn-warning btn-sm"><i class="feather-16" data-feather="arrow-left"></i> {{ __('Back') }}
            </button></a>
        <br />
        <br />
        <form method="POST" id="oneTimeSubmit" action="{{ url('/admin/site-setting/' . $sitesetting->id) }}" accept-charset="UTF-8" class="form-horizontal needs-validation" novalidate=""  enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            @include ('admin.site-setting.form', ['formMode' => 'edit'])

        </form>

    </div>
</div>


@endsection
