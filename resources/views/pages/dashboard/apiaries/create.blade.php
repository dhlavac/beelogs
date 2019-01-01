@extends('layouts.dashboard.app')

@section('page-title', 'Create Apiary • ')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="float-left">
                    <h1>Create Apiary</h1>
                </div>

                <div class="float-right">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#">Apiaries</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Apiary</li>
                      </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form>
          @csrf
            <div class="row">
                <div class="col-md-9">
                    <div class="form-row" style="margin-top: 25px;">
                        <div class="form-group col-sm-6 col-md-6">
                            <label class="sr-only" for="apiaryName">Apiary Name</label>
                            <input type="text" class="form-control" id="apiaryName" aria-describedby="apiaryName" placeholder="Name">
                        </div>

                        <div class="form-group col-sm-6 col-md-6">
                            <label class="sr-only" for="apiaryCode">Apiary Code</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">#</div>
                                </div>
                                <input type="text" class="form-control" id="apiaryCode" placeholder="Code">
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label class="sr-only" for="apiaryLatatude">Address</label>
                            <input type="text" class="form-control" id="apiaryAddress" aria-describedby="apiaryAddress" placeholder="Address">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-6 col-md-6">
                            <label class="sr-only" for="apiaryLatatude">Latatude</label>
                            <input type="text" class="form-control" id="apiaryLatatude" aria-describedby="apiaryLatatude" placeholder="Latatude">
                        </div>

                        <div class="form-group col-sm-6 col-md-6">
                            <label class="sr-only" for="apiaryLongatude">Longatude</label>
                            <input type="text" class="form-control" id="apiaryLongatude" aria-describedby="apiaryLongatude" placeholder="Longatude">
                        </div>
                    </div>

                    <div class="form-group create-apiary-description">
                        <label class="sr-only" for="apiartDescription">Apiary Description</label>
                        <textarea class="form-control" id="apiaryDescription" rows="3" placeholder="Description"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="apiaryImage">
                            <label class="custom-file-label" for="apiaryImage">Choose an Image</label>
                            <small><strong>Accepted File Formats:</strong> JPG, JPEG &amp; PNG. <strong>Max File Size:</strong> 20 MB.</small>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Save State
                        </div>
                        <div class="card-body">
                            <div class="float-left">
                                <button type="button" name="button" class="btn btn-secondary">Save Draft</button>
                            </div>
                            <div class="float-right">
                              <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
