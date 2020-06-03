@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.status.title_singular') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.status.fields.id') }}
                        </th>
                        <td>
                            {{ $status->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.status.fields.name') }}
                        </th>
                        <td>
                            {{ $status->name }}
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>
                            {{ trans('cruds.status.fields.color') }}
                        </th>
                        <td style="background-color:{{ $status->color ?? '#FFFFFF' }}"></td>
                    </tr> -->
                </tbody>
            </table>
        </div>

        <a class="btn btn-default my-2" href="{{ route('admin.statuses.index') }}">
            {{ trans('global.back_to_list') }}
        </a>

            <a href="{{ route('admin.statuses.edit', $status->id) }}" class="btn btn-primary">
            @lang('global.edit') @lang('cruds.status.title_singular')
        </a>
        
        <nav class="mb-3">
            <div class="nav nav-tabs">

            </div>
        </nav>
        <div class="tab-content">

        </div>
    </div>
</div>
@endsection