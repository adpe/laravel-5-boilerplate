@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.backend.plugins.management'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    @lang('labels.backend.plugins.management')
                </h4>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>@lang('labels.backend.plugins.table.name')</th>
                            <th>@lang('labels.backend.plugins.table.frankenstyle')</th>
                            <th>@lang('labels.backend.plugins.table.version')</th>
                            <th>@lang('labels.backend.plugins.table.release')</th>
                            <th>@lang('labels.backend.plugins.table.platform')</th>
{{--                            <th>@lang('labels.general.actions')</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($plugins as $plugin)
                            <tr>
                                <td>{{ $plugin['name'] }}</td>
                                <td>{{ $plugin['type'] . '_' . $plugin['name'] }}</td>
                                <td>{{ $plugin['versiondb'] }}</td>
                                <td>{{ $plugin['release'] }}</td>
                                <td>tba</td>
{{--                                <td>--}}
{{--                                    <div class="btn-group btn-group-sm" role="group" aria-label="@lang('labels.backend.plugins.actions')">--}}
{{--                                        <a href="#" class="btn btn-primary"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="@lang('buttons.general.crud.edit')"></i></a>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {!! count($plugins) !!} {{ trans_choice('labels.backend.plugins.table.total', count($plugins)) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
