@php
$title = '商品一覧';
@endphp

@extends('layouts.admin')

@section('content')
<section>
  <p>
    <a href="{{ route('admin.item.create') }}" class="btn btn-outline-primary">{{ __('New') }}</a>
  </p>
  <div>
    <table class="table">
      <tr>
        <th></th>
        <th>{{ __('Item Name') }}</th>
        <th>{{ __('Item Code') }}</th>
        <th>{{ __('Price') }}</th>
      </tr>
      @if($items)
      @foreach($items as $item)
      <tr>
       
        <td><a href="{{ route('admin.item.edit', ['id' => $item->id]) }}" class="btn btn-outline-primary">{{ __('Edit')
            }}</a></td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->code }}</td>
        <td>{{ $item->price }}</td>
      </tr>
      @endforeach
      @endif
    </table>
    
  </div>
</section>
@endsection