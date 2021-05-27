@extends('layouts.app',['pageTitle' => __(' Site Setting Show')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Site Setting') }}
    @endslot
@endcomponent
<div class="card">
    <div class="card-header">{{ __(' Site Setting') }}</div>
    <div class="card-body">

        <a href="#" onclick="history.back()" title="Back"><button
            class="btn btn-warning btn-sm"><i class="feather-16" data-feather="arrow-left"></i> {{ __('Back') }}
            </button></a>
        
        <a href="{{ url('/admin/site-setting/' . $sitesetting->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="feather-16" data-feather="edit"></i> {{ __('Edit') }}</button></a>
        
        <form method="POST" id="deleteButton{{$sitesetting->id}}" action="{{ url('admin/sitesetting' . '/' . $sitesetting->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="sweetalertDelete({{$sitesetting->id}})"><i class="feather-16" data-feather="trash-2"></i> {{ __('Delete') }}</button>
        </form> 
        <br/>
        <br/>

        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr><th> Logo </th><td> {{ $sitesetting->logo }} </td></tr><tr><th> Address </th><td> {{ $sitesetting->address }} </td></tr><tr><th> Google Location Script </th><td> {{ $sitesetting->google_location_script }} </td></tr><tr><th> Opening Day </th><td> {{ $sitesetting->opening_day }} </td></tr><tr><th> Closing Day </th><td> {{ $sitesetting->closing_day }} </td></tr><tr><th> Mobile Number </th><td> {{ $sitesetting->mobile_number }} </td></tr><tr><th> Email Address </th><td> {{ $sitesetting->email_address }} </td></tr><tr><th> Stripe Publishable Key </th><td> {{ $sitesetting->stripe_publishable_key }} </td></tr><tr><th> Stripe Api Key </th><td> {{ $sitesetting->stripe_api_key }} </td></tr>
                </tbody>
            </table>
        </div>

    </div>
</div>


@endsection
