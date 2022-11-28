@extends('location::layout')

@section('body')
<div class="col-md-10 mx-auto pt-5">
  <div class="card card-body">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Latitude</th>
              <th scope="col">Longititude</th>
              <th scope="col">Login time</th>
            </tr>
          </thead>
          <tbody>
            @foreach($activities as $activity)
            <tr>
              <td>{{optional($activity->user)->name}}</td>
              <td>{{$activity->lattitude}}</td>
              <td>{{$activity->longitude}}</td>
              <td>{{Carbon\Carbon::parse($activity->created_at)->diffForHumans()}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</div>
@endsection