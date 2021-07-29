<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
    @include('links')
</head>
<body>
    @include('navbar')

    <div class="container">
        <br><br><br><br>
        @if($message = Session::get('success'))

        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif
        <br><br>
    <table id="dt-multi-checkbox" class="table" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th class="th-sm">#
            </th>
            <th class="th-sm">Name
            </th>
            <th class="th-sm">Display Name
            </th>
            <th class="th-sm">Description
            </th>
            <th class="th-sm">Options
            </th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $i=>$row)
            <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->display_name }}</td>
            <td>{{ $row->description }}</td>
            <td>
            <a href="{{ url('/permission/edit/' . $row->id) }}" class="btn btn-primary">Edit</a>
            {{ Form::open(['method'=>'DELETE','url'=>['/permission/delete/'.$row->id],'style'=>'display:inline' ]) }}
            {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
            {{ Form::close() }}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
      <script>
          $(document).ready(function () {
  $('#dt-multi-checkbox').dataTable({

    columnDefs: [{
      orderable: false,
      className: 'select-checkbox',
      targets: 0
    }],
    select: {
      style: 'multi',
      selector: 'td:first-child'
    }
  });
});
      </script>
</body>
</html>