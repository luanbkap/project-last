@extends('layouts.app2')

@section('page-title')
<li class="active"><a>Dashboard</a></li>
@endsection

@section('content')

<div class="col-sm-12 col-lg-12">
  <div id="chart1"></div>

{!! $chart1 !!}
</div>

@endsection
