<head>
  <title>福井支店</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">メンバー一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">メンバー名</th>
        <th class="text-center">所属</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($members as $member)
      <tr>
        <td>
          <a href="/book/{{ $member->id }}/edit">{{ $member->id }}</a>
        </td>
        <td>{{ $member->name }}</td>
        <td>{{ $member->groupe->name }}</td>

        <td>
          <form action="/member/{{ $member->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/member/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>