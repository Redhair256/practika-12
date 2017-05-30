<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Users List</title>
    <link rel="stylesheet" href={{ asset('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }} > 
	</head>
	<body>
  
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="{{ route('linkLinks') }}"><span class="glyphicon glyphicon-home" aria-hidden="false"></span></a></li>
        <li><a href="{{ route('linkLinks') }}"><span class="glyphicon glyphicon-list" aria-hidden="false"></span> Ссылки</a></li>
        <li><a href="{{ route('linkStatistics') }}"><span class="glyphicon glyphicon-stats" aria-hidden="false"></span> Статистика переходов</a></li>
        <li><a href="{{ route('linkUsers') }}"><span class="glyphicon glyphicon-user" aria-hidden="false"></span> Список пользователей</a></li>
        <li><a href="{{ route('linkUserStat') }}"><span class="glyphicon glyphicon-equalizer" aria-hidden="false"></span> Статистика пользователей</a></li>

      </ul>
    </nav>

    <div class="container">

      <h4>Список пользователей</h4>
      <table class="table table-bordered">
          <thead> 
            <tr>
              <th width=40 class="text-center"><span class="glyphicon glyphicon-th-list" aria-hidden="false"></span></th>
              <th width=200><b> id Пользователя </b></th>
              <th width=200><b> Браузер Пользователя </b></th>
              <th width=200><b> ОС Пользователя </b></th>
              <th><b> Дата и время создания </b></th>
           </tr>
          </thead>
          <tbody>
        @if ( $user_id != null )
          @foreach($users as $user)
            @if ( $user_id  == $user->id)  
              <tr bgcolor="lightgreen">
            @else
              <tr>
            @endif
              <th width=40 class="text-center"><span class="glyphicon glyphicon-user" aria-hidden="false"></span></th>
              <td><a href="{{ route('linkUserStat', $user->token) }}"> {{ $user->token }} </a></td>
              <td> {{ $user->browser }} </td>
              <td> {{ $user->os }} </td>
              <td> {{ $user->created_at }} </td>
            </tr>
          @endforeach
        @else
          @foreach($users as $user)
            <tr>
              <th width=40 class="text-center"><span class="glyphicon glyphicon-user" aria-hidden="false"></span></th>
              <td><a href="#"> {{ $user->token }} </a></td>
              <td> {{ $user->browser }} </td>
              <td> {{ $user->os }} </td>
              <td> {{ $user->created_at }} </td>
            </tr>
          @endforeach
        @endif
        </tbody>
      </table> 
      <?php echo $users->render(); ?>
    </div>
    <script type="text/javascript" src= {{ asset('vendor/components/jquery/jquery.min.js') }} ></script>
    <script type="text/javascript" src= {{ asset('vendor/twbs/bootstrap/dist/js/bootstrap.min.js') }} ></script>    

	</body>
</html>
