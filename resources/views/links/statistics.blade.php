<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Statistics</title>
    <link rel="stylesheet" href={{ asset('vendor/twbs/bootstrap/dist/css/bootstrap.min.css') }} > 
	</head>
	<body>
  
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
      <ul class="nav navbar-nav">
        <li><a href="..\links"><span class="glyphicon glyphicon-list" aria-hidden="false"></span>
          Ссылки</a></li>
        <li><a href="123"><span class="glyphicon glyphicon-stats" aria-hidden="false"></span>
          Статистика</a></li>
      </ul>
    </nav>

    <div class="container">
    <h4>Выбрать ссылку</h4>
    <div class="input-group input-group-lg">
      <span class="input-group-addon" id="sizing-addon1"><span class="glyphicon glyphicon-link" aria-hidden="false"></span></span>
      <select class="form-control" size="0" id="sel1"  aria-describedby="basic-addon1" onchange="top.location=this.value">
        <option disabled>Выберите код</option>

        @foreach($links as $link)

        @if ( $link->id == $curent_link->id )
          <option selected value="{{ $link->token}}">{{ $link->token }}</option>
        @else
          <option value="{{ $link->token }}">{{ $link->token }}</option>
        @endif

        @endforeach 

      </select>
    </div>
    <br>
    <h4>Статистика</h4>
        <table class="table table-bordered">
          <thead> 
            <tr>
              <th width=40 class="text-center"><span class="glyphicon glyphicon-globe" aria-hidden="false"></span></th>
              <th width=250><b> идентификатор </b></th>
              <th><b> целевой URL ссылки </b></th>
              <th width=100><div class=text-center><b> Переходов: </b></div></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td align="center"><a href="#"><span class="glyphicon glyphicon-link" aria-hidden="false" ></span></a></td>
              <td>{{$curent_link->token}}</td>
              <td><a href="{{ $curent_link->target_url }}"> {{ $curent_link->target_url }} </a></td>
              <td align="right"> {{ $num_click }} </td>
            </tr>
          </tbody>
         </table> 
    
    <br>
    <h4>Преходы</h4>
    <table class="table table-bordered">
          <thead> 
            <tr>
              <th width=290><b> Время перехода </b></th>
              <th><b> ip Пользователя </b></th>
           </tr>
          </thead>
          <tbody>

          @foreach($clicks as $click)
            <tr>
              <td> {{ $click->created_ad }} </td>
              <td><a href="#"> {{ $click->user_id }} </a></td>
            </tr>
          @endforeach

          </tbody>
         </table> 
    </div>
    <script type="text/javascript" src= {{ asset('vendor/components/jquery/jquery.min.js') }} ></script>
    <script type="text/javascript" src= {{ asset('vendor/twbs/bootstrap/dist/js/bootstrap.min.js') }} ></script>    

	</body>
</html>
