extends('layout')

@section('content')
    <h1>{{ __('web.statistika') }}</h1>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">{{ __('web.nazov') }}</th>
      <th scope="col">{{ __('web.pocet_navstev') }}</th>
    </tr>
  </thead>
  <tbody>
  @foreach($statistics as $row)
    <tr>
      <th scope="row">1</th>
      <td>{{ __('web.modelA') }}</td>
      <td>{{$row['model_A']}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>{{ __('web.modelB') }}</td>
      <td>{{$row['model_B']}}</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>{{ __('web.modelC') }}</td>
      <td>{{$row['model_C']}}</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>{{ __('web.modelD') }}</td>
      <td>{{$row['model_D']}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection