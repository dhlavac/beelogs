@extends('layouts.app')

@section('title'){{ trans('dashboard/queens.title') }} &bull; @endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">{{ trans('dashboard/queens.title') }}</div>
          <div class="panel-body">
            {{ trans('dashboard/queens.no-data') }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
