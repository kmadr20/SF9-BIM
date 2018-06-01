@extends('master')

@section('title', 'Client')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Create a new client</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Company name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="freshbooks_id" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="freshbooks_id"></textarea>
                            <span class="help-block">Collect this from the URL on the Freshbooks company view</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="teamwork_id" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="teamwork_id"></textarea>
                            <span class="help-block">Collect this from the URL on the Teamwork company view</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="notes" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="notes"></textarea>
                            <span class="help-block">Any company-wide notes required for this client.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection