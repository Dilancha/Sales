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

<h2 align="center">Add Details</h2>
@include('messages')
       <form action="{{url('create/sale')}}" method="POST">
         {{ csrf_field() }}
       <div class="form-group">
         <label for="exampleFormControlInput1">Team Name</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Email</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Tell Number</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="tell">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Join Date</label>
         <input type="date" class="form-control" id="exampleFormControlInput1" name="date">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Working Routes</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="wr">
       </div>

       <div class="form-group">
         <label for="exampleFormControlInput1">Message</label>
         <input type="text" class="form-control" id="exampleFormControlInput1" name="message">
       </div>

       <input type="submit" value="Submit" class="btn btn-primary">
     </form>
</div>
