@extends('layouts.dashboard.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('dashboard/pages/index.dashboard.dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hi {{ Auth::user()->name }}, you are now logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('dashboard/pages/index.tasks.tasks') }}</div>

                <div class="card-body">
                    {{ trans('dashboard/pages/index.tasks.no-tasks') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('dashboard/pages/index.news-updates.news-updates') }}</div>

                <div class="card-body">
                    <ul>
                        <li>
                            <p><strong>Version 0.1.0 in Development</strong> - 18/12/2018 @ 19:58<br>The BeeLogs core team have begun development of version 0.1.0. The core team have set a target of late February for a stable release. <a href="#">Read more...</a></p>
                        </li>
                        <li>
                            <p><strong>National Bee Unit - Starvation Alert</strong> - 14/11/2018 @ 11:30<br>Beekeepers should continue to monitor their colonies throughout the winter as temperatures in some regions of the UK have been unusually high for the winter months. <a href="#">Read more...</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
