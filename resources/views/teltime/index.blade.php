<head>
  <title>福井支店</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">グループ一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">班名</th>
      </tr>
      @foreach($groupes as $groupe)
      <tr>
        <td>{{ $groupe->name }}</td>
        <td>{{ $groupe->teltime->name }}</td>
      </tr>
      @endforeach
    </table>

    <div>
    <form action="/teltime/" method="post">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">変更</button>
            </form>
    </div>
  </div>
</div>