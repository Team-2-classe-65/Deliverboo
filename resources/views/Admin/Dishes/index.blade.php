@extends('layouts.app')

@section('content')
    <div class="container p-3">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1>Tutti i piatti</h1>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a href="{{ route('admin.dishes.create') }}" class="btn btn-success">
                        Crea nuovo piatto
                    </a>
                    <a href="{{ route('admin.home') }}"><i class="fa-solid fa-3x fa-circle-arrow-left btn-back"></i></a>
                </div>

                <div class="row">
                    @foreach ($dishes as $dish)
                        <div class="col-4 g-3">
                            <a href="{{ route('admin.dishes.show', ['dish' => $dish->slug]) }}" class="text-uppercase">
                                <div class="card position-realtive x overflow-hidden" style="height: 150px">
                                    <img src="{{ asset('storage/' . $dish->dish_img) }}" alt="" class="w-100 rounded">
                                    <h2>
                                        {{ $dish->name }}
                                    </h2>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
