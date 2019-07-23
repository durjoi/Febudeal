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

              <td>{{ $product->id }}</td>
              <td>{{ $product->title }}</td>
              <td>
                @foreach ($sixthsecs as $sixthsec)
                  @if ($sixthsec->products_id==$product->id)
                    <p>It's Already Added</p>
                  @endif
                @endforeach
                <form class="" action="{{ route('admin.sixthsec.add', $product->id) }}" method="post">
                  @csrf
                    <input type="submit" name="Sixthsec" value="Add Fifth Section">

                </form>
              </td>



        </tr>
      @endforeach

    </table>

@endsection
