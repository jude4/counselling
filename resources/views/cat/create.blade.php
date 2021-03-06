
@extends('layouts.dashboard')


@section('content')

<div class="form-three widget-shadow">
    <h1 class="text-center">Create Post Tag</h1>
<div data-example-id="form-validation-states">
    <form action="{{ route('cat.store')}}" method="POST">
        @csrf
        <div class="form-group has-success">
            <label class="control-label" for="inputSuccess1">Tag name*</label>
            <input type="text" name="name" placeholder="Tag name" class="form-control" id="inputSuccess1" aria-describedby="helpBlock2">
            <span id="helpBlock2" class="help-block"></span>
        </div>
        <div class="has-error">
            <div class="checkbox">
                 <button name="submit" type="submit" id="checkboxError"  class="btn btn-info btn-sm">Create</button>
            </div>
        </div>
    </form>
</div>
</div>

@stop


