@extends('layouts.app')

@section('content')
<div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="title-order" >Tutti gli ordini</h1>
        </div>
        <table class="table">
          <thead>
            <tr>
              {{-- <th>ID</th>
              <th>user_id</th> --}}
              <th>code</th>
              <th>name</th>
              <th>surname</th>
              <th>mail</th>
              <th>address</th>
              <th>phone</th>
              <th>total_price</th>
              <th>created_at</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            @if ($order->user->id === Auth::user()->id)
              <tr>
                {{-- <td>{{ $order->id }}</td>
                <td>{{ $order->user_id }}</td> --}}
                <td>{{ $order->code }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->surname }}</td>
                <td>{{ $order->mail }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ $order->created_at }}</td>
              </tr>
            @endif
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection