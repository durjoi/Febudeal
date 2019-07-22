@extends('admin.admin')

@section('content')


    <table border="1" style="width: 100%; margin: 20px;">
      <tr>
        <th>ID</th>
        <th>Saler</th>
        <th>Title</th>
        <th>Action</th>
      </tr>

      @foreach ($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>
            @foreach ($salers as $saler)
              @if ($saler->id == $product->saler_id)
                {{ $saler->username }}
              @endif
            @endforeach
          </td>
          <td>{{ $product->title }}</td>
          <td>{{ $product->action }}
            <form class="" action="{{ route('admin.add.action', $product->id) }}" method="post">
              @csrf
              @if ($product->action != 'live')
                <input type="submit" name="Live" value="live">
              @endif

            </form>
            <a href="{{ route('admin.product', $product->id) }}">Show Details</a>
          </td>
        </tr>
      @endforeach

    </table>

@endsection
