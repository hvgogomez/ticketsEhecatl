@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.priority.title_singular') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.id') }}
                        </th>
                        <td>
                            {{ $priority->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.priority.fields.name') }}
                        </th>
                        <td>
                            {{ $priority->name }}
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>
                            {{ trans('cruds.priority.fields.color') }}
                        </th>
                        <td style="background-color:{{ $priority->color ?? '#FFFFFF' }}"></td>
                    </tr> -->
                </tbody>
            </table>
            
        </div>
        <a class="btn btn-default my-2" href="{{ route('admin.priorities.index') }}">
            {{ trans('global.back_to_list') }}
        </a>

            <a href="{{ route('admin.priorities.edit', $priority->id) }}" class="btn btn-primary">
            @lang('global.edit') @lang('cruds.priority.title_singular')
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