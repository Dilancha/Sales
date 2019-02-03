<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>

  </body>
</html>

<div class="container">

<h2 align="center">Edit Details</h2>
@include('messages')
       <form action="{{url('edits', [$customer->id])}}" method="POST">
         {{ csrf_field() }}
       <div class="form-group">
         <label for="exampleFormControlInput1">Team Name</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{$customer->name}}">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Email</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="{{$customer->email}}">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Tell Number</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="tell" value="{{$customer->tell}}">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Join Date</label>
         <input type="date" class="form-control" id="exampleFormControlInput1" name="date" value="{{$customer->date}}">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Working Routes</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="wr" value="{{$customer->wr}}">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Message</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="message" value="{{$customer->message}}">
       </div>

       <input type="submit" value="Submit" class="btn btn-primary">
     </form>
</div>
