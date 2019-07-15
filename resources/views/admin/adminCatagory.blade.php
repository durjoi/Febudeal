@extends('admin.admin')

@section('content')
  <a href="{{ route('admin.catagory.add') }}">Add Catagory</a>
  <a href="{{ route('admin.subcatagory.add.catagory') }}">Add Sub Catagory</a>
  <a href="{{ route('admin.sub2catagory.add.catagory') }}">Add Sub Sub Catagory</a>
  <ul>
    @if (count($catagories)>0)
      @foreach ($catagories as $catagory)
        <li>{{ $catagory->catagory}}
          <form class="" action="{{ route('admin.catagory.delete', $catagory->id) }}" method="post">
            @csrf
          <input type="submit" name="delete" value="Delete">
        </form>
        <a href="{{ route('admin.catagory.edit', $catagory->id) }}">Edit</a>
          <ul>
              @if (count($subcatagories)>0)
                @foreach ($subcatagories as $subcatagory)
                  @if ($subcatagory->catagories_id == $catagory->id)
                    <li>
                        {{ $subcatagory->subcatagories }}
                        <form class="" action="{{ route('admin.subcatagory.delete', $subcatagory->id) }}" method="post">
                          @csrf
                        <input type="submit" name="delete" value="Delete">
                      </form>
                      <a href="{{ route('admin.subcatagory.edit', $subcatagory->id) }}">Edit</a>
                        <ul>
                          @if(count($sub2catagories)>0)
                            @foreach ($sub2catagories as $sub2catagory)
                              @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                                <li>{{ $sub2catagory->subcatagories2 }}
                                  <form class="" action="{{ route('admin.sub2catagory.delete', $sub2catagory->id) }}" method="post">
                                    @csrf
                                  <input type="submit" name="delete" value="Delete">
                                </form>
                                <a href="{{ route('admin.sub2catagory.edit', $sub2catagory->id) }}">Edit</a>
                                </li>
                              @endif
                            @endforeach
                          @endif
                        </ul>
                      </li>
                  @endif
                @endforeach
              @endif
          </ul>
        </li>
      @endforeach
    @endif
  </ul>
@endsection
