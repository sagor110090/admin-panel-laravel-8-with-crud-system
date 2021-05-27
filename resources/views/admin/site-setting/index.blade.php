@extends('layouts.app',['pageTitle' => __(' Site Setting')])
@section('content')

@component('layouts.parts.breadcrumb')
    @slot('title')
        {{ __(' Site Setting') }}
    @endslot
@endcomponent


<div class="card">
    <h6 class="card-header">{{ __(' Site Setting List') }}</h6>

    <div class="card-body">
       
            <a href="{{ url('/admin/site-setting/create') }}" class="btn btn-success btn-sm"
                title="Add New  Site Setting">
                <i class="feather-16" data-feather="plus"></i> {{ __('Add New') }}
            </a>
           

        <form method="GET" action="{{ url('/admin/site-setting') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                    <span class="input-group-append">
                        <button class="btn btn-secondary" type="submit">
                            <i class="feather-16" data-feather="search"></i>
                        </button>
                    </span>
                </div>
        </form>

        <br/>
        <br/>
        <div class="table-responsive mt-3">
            <table class="table table-striped table-hover"  style="width:100%;">
                <thead>
                    <tr>
                        <th  width='30'>#</th><th>Logo</th><th>Address</th><th>Google Location Script</th><th>Opening Day</th><th>Closing Day</th><th>Mobile Number</th><th>Email Address</th><th>Stripe Publishable Key</th><th>Stripe Api Key</th><th>{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sitesetting as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->logo }}</td><td>{{ $item->address }}</td><td>{{ $item->google_location_script }}</td><td>{{ $item->opening_day }}</td><td>{{ $item->closing_day }}</td><td>{{ $item->mobile_number }}</td><td>{{ $item->email_address }}</td><td>{{ $item->stripe_publishable_key }}</td><td>{{ $item->stripe_api_key }}</td>
                        <td>
                            <a href="{{ url('/admin/site-setting/' . $item->id) }}" title="View"><button class="btn btn-info btn-sm"><i class="feather-16" data-feather="eye"></i></button></a>
                       
                            <a href="{{ url('/admin/site-setting/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="feather-16" data-feather="edit"></i> </button></a>
                       
                            <form method="POST" id="deleteButton{{$item->id}}"
                                action="{{ url('/admin/site-setting' . '/' . $item->id) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm"
                                    title="Delete"
                                    onclick="sweetalertDelete({{$item->id}})"><i class="feather-16" data-feather="trash-2"></i></button>
                            </form>
                      
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="pagination-wrapper"> {!! $sitesetting->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>

    </div>
</div>


@endsection
