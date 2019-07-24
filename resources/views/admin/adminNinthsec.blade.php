@extends('admin.admin')

@section('content')


    <table border="1" style="width: 100%; margin: 20px;">
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
      </tr>

      @foreach ($products as $product)
        <tr>
          @foreach ($ninthsecs as $ninthsec)
            @if ($ninthsec->products_id == $product->id)
              <td>{{ $product->id }}</td>
              <td>{{ $product->title }}</td>
              <td>
                {{-- <form class="" action="{{ route('admin.dotd.add', $product->id) }}" method="post">
                  @csrf
                    <input type="submit" name="Dotd" value="Add Dotd">

                </form> --}}
                <form class="" action="{{ route('admin.ninthsec.delete', $product->id) }}" method="post">
                  @csrf
                    <input type="submit" name="Ninthsec" value="Delete">

                </form>
                <a href="{{ route('admin.product', $product->id) }}">Show Details</a>
              </td>
            @endif
          @endforeach
        </tr>
      @endforeach

    </table>
    <div class="col-md-12 text-center">
      <a href="{{ route('admin.ninthsec.add.catagory') }}">Add New DOTD</a>
    </div>

@endsection
