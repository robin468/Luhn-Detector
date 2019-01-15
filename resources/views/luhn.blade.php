@extends('layouts.app')

@section('content')
    <title>LUHN Detector</title>

    <form  method="POST" action={{ route('luhn') }}>
        {{ csrf_field() }}
        <label class="text-md-right">Credit Card Number</label>
        <input type="text" class="form-control" >
        <button type="submit" formmethod="POST">Submit</button>
    </form>
@endsection
