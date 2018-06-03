@extends('master')

@section('title', 'Client')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend>Create a new client</legend>
                    <div class="form-group">
                        <label for="name" class="col-lg-2 control-label">Company name</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="name" placeholder="Company name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="freshbooks_id" class="col-lg-2 control-label">Freshbooks ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="freshbooks_id" name="freshbooks_id">
                            <span class="help-block">Collect this from the URL on the Freshbooks company view</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="teamwork_id" class="col-lg-2 control-label">Teamwork ID</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="teamwork_id" name="teamwork_id">
                            <span class="help-block">Collect this from the URL on the Teamwork company view</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="accman_id" class="col-lg-2 control-label">Account Manager</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="accman_id" name="accman_id">
                                <option value="0">Ger</option>
                                <option value="1">Hannah</option>
                                <option value="2">Jean</option>
                                <option value="3">Jen</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tax_exempt" class="col-lg-2 control-label">Tax exempt?</label>
                        <div class="col-lg-10">
                            <input type="checkbox" class="form-control" id="tax_exempt" name="tax_exempt" value="tax_exempt">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-lg-2 control-label">Status</label>
                        <div class="col-lg-10">
                            <select class="form-control" id="status" name="status">
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="notes" class="col-lg-2 control-label">Company notes</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="notes" name="notes"></textarea>
                            <span class="help-block">Any company-wide notes required for this client.</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection