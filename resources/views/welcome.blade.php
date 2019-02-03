<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  </head>
  <body>
    <div class="container">
      <h2 align="center">details</h2>
      <a href="/create" class="btn btn-info">Add</a> <br>
      @if(count($customer) > 0)
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Tell Num</th>
          <th scope="col">Date</th>
          <th scope="col">Route</th>
          <th scope="col">Message</th>
          <th scope="col">edit</th>
          <th scope="col">delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($customer as $customers)
                  <tr>
                      <td>
                        {{$customers->id}}
                      </td>
                      <td>
                        {{$customers->name}}
                      </td>
                      <td>
                        {{$customers->email}}
                      </td>
                      <td>
                        {{$customers->tell}}
                      </td>
                      <td>
                        {{$customers->date}}
                      </td>
                      <td>
                        {{$customers->wr}}
                      </td>
                      <td>
                        {{$customers->message}}
                      </td>
                      <td>
                        <a href="/edit/{{$customers->id}}" class="btn btn-link">edit</a>
                      </td>
                      <td>
    <form action="{{url('deletes', [$customers->id])}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" class="btn btn-link" value="Delete">
  </form>
                      </td>
                      <td>

                      </td>
                    @endforeach
      </tbody>
    </table>
     @endif
  </body>
</div>
</html>
