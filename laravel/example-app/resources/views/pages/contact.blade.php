@extends('main')

@section('title','| Contact') 


@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Contact Us</h1>
            <hr>
            <form action="">
                <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject">Subject : </label>
                    <input type="subject" id="subject" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="detial">Detial : </label>
                    <textarea name="detial" id="detial"  rows="10" class="form-control">Give detials .......</textarea>
                </div>
                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection
