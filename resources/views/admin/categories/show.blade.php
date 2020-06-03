@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.category.title_singular') }}
    </div>

    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.id') }}
                        </th>
                        <td>
                            {{ $category->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.category.fields.name') }}
                        </th>
                        <td>
                            {{ $category->name }}
                        </td>
                    </tr>
                    <!-- <tr>
                        <th>
                            {{ trans('cruds.category.fields.color') }}
                        </th>
                        <td style="background-color:{{ $category->color ?? '#FFFFFF' }}"></td>
                    </tr> -->
                </tbody>
            </table>
        </div>
        <a class="btn btn-default my-2" href="{{ route('admin.categories.index') }}">
            {{ trans('global.back_to_list') }}
        </a>

            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-primary">
            @lang('global.edit') @lang('cruds.category.title_singular')
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