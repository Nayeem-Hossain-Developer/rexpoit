@extends('location::layout')

@section('body')
<div class="col-md-10 mx-auto pt-5">
  <div class="card card-body">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">phone</th>
              <th scope="col">Salary Amount</th>
              <th scope="col">Cash Amount</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->phone}}</td>
              <td>{{optional($user->salary)->salary_amount}}</td>
              <td>{{optional($user->salary)->cash_amount}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</div>
@endsection