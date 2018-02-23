@extends('layouts.default')
@section('content')
<main class="row">
    <div class="col-12">
        <form action="#" method="post">
            <div class="form-group">
                <label for="businessName">Business Name</label>
                <input type="text" class="form-control" id="businessName" aria-describedby="nameHelp" placeholder="Enter Business Name">
            </div>

            <div class="form-group">
                <label for="businessAddress">Business Address</label>
                <input type="text" class="form-control" id="businessAddress" placeholder="Enter Business Address">
            </div>

            <div class="form-group">
                <label for="businessHours">Business Hours</label>
                <input type="text" class="form-control" id="businessHours" placeholder="Enter Business Hours">
            </div>

            <div class="form-group">
                <label for="businessPhone">Business Phone</label>
                <input type="text" class="form-control" id="businessPhone" placeholder="Enter Business Phone">
            </div>

            <div class="form-group">
                <label for="businessWebsite">Business Website</label>
                <input type="text" class="form-control" id="businessWebsite" placeholder="Enter Businesss Website">
            </div>
            
<!--            Upload image prompts:-->
<!--
            <div class="form-group">
               Upload the Front of Card Image(Coming Soon)
                <label class="custom-file">
                    <input type="file" id="file1" class="custom-file-input" disabled>
                    <span class="custom-file-control"></span>
                </label>
            </div>
            
            <div class="form-group">
                Upload the Back of Card Image(Coming Soon)
                <label class="custom-file">
                    <input type="file" id="file2" class="custom-file-input" disabled>
                    <span class="custom-file-control"></span>
                </label>
            </div>            
-->

            <button type="submit" class="btn btn-success">Add Card</button>
        </form>
    </div>
</main>
@stop