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
        <th class="text-center">ID</th>
        <th class="text-center">班名</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($groupes as $groupe)
      <tr>
        <td>
          <a href="/book/{{ $groupe->id }}/edit">{{ $groupe->id }}</a>
        </td>
        <td>{{ $groupe->name }}</td>
        <td>
          <form action="/groupe/{{ $groupe->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/groupe/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>