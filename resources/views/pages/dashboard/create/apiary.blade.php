@extends('layouts.app')

@section('title'){{ trans('dashboard/apiaries.create.title') }} &bull; @endsection

@section('content')
  <form>
    <div class="container">
      <div class="row">
        <div class="col-md-8">

          <div class="form-group">
            <label for="apiaryName">Apiary Name</label>
            <input type="text" class="form-control" id="apiaryName">
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="apiaryNotes">Apiary Latitude</label>
                <input type="text" class="form-control" id="apiaryLatitude">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="apiaryNotes">Apiary Longitude</label>
                <input type="text" class="form-control" id="apiaryLongitude">
              </div>
            </div>
          </div>

          {{--
          <div class="form-group">
            <div style="width: 500px; height: 500px;">
            	{!! Mapper::render() !!}
            </div>
          </div>
          --}}

          <div class="form-group">
            <label for="apiaryNotes">Apiary Notes</label>
            <textarea class="form-control" id="apiaryNotes" rows="3"></textarea>
          </div>

        </div>

        <div class="col-md-4 padd-top-25px">
          <div class="panel panel-default">
            <div class="panel-heading">{{ trans('dashboard/apiaries.create.title') }}</div>
            <div class="panel-body">
              <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-default">Save Draft</button>
              </div>
              <div class="col-md-6 text-center">
                <button type="submit" class="btn btn-success">Save Apiary</button>
              </div>
            </div>
          </div>

          {{--
          <div class="panel panel-default">
            <div class="panel-heading">{{ trans('dashboard/apiaries.create.title') }}</div>
            <div class="panel-body">
              <select class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          --}}

        </div>
      </div>
    </div>
  </form>
@endsection
