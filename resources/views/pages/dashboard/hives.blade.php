@extends('layouts.app')

@section('title'){{ trans('dashboard/hives.title') }} &bull; @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">{{ trans('dashboard/hives.title') }}</div>
          <div class="panel-body">
            {{ trans('dashboard/hives.no-data') }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
