@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-home"></i> @lang('navs.general.home')
                </div>
                <div class="card-body">
                    @lang('strings.frontend.welcome_to', ['place' => app_name()])
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-plug"></i> @lang('strings.frontend.plugins.overview')
                </div>
                <div class="card-body">
                    <p>@lang('strings.frontend.plugins.intro')</p>
                    <a class="btn btn-outline-secondary" href="{{ route('admin.plugins') }}">@lang('strings.frontend.plugins.button')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
