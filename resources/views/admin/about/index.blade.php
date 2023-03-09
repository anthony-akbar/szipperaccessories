@extends('layouts.admin')
@section('title')
    | About
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium my-10">About</h2>
    @if($abouts->isEmpty())
        @include('admin.about.create')
    @else
        <div class="box p-5">
            @foreach($abouts as $about)
                @foreach($about->toArray() as $key => $value)
                    @if($key != 'id' && $key != 'created_at' && $key!= 'updated_at' && $key != 'deleted_at' && $value != null)
                        <div class="grid p-3 grid-cols-2">
                            <div class="pl-10 grid-cols-1 text-lg font-medium text-primary">
                                {{ ucwords(str_replace('_', ' ', $key)) }}
                            </div>
                            <div class="grid-cols-1">
                                {{ $value }}
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach
                <div class="modal-footer">
                    @include('admin.about.edit')
                </div>
        </div>
    @endif
@endsection
