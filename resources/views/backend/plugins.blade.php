@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.plugins.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>@lang('strings.backend.plugins.title')</strong>
                </div>
                <div class="card-body">
                    {!! __('strings.backend.plugins.intro') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
