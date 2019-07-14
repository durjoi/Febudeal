@extends('admin.admin')

@section('content')
  <a href="{{ route('admin.catagory.add') }}">Add Catagory</a>
  <a href="#">Add Sub Catagory</a>
  <a href="#">Add Sub Sub Catagory</a>
  <ul>
    @if (count($catagories)>0)
      @foreach ($catagories as $catagory)
        <li>{{ $catagory->catagory}}
          <ul>
              @if (count($subcatagories)>0)
                @foreach ($subcatagories as $subcatagory)
                  @if ($subcatagory->catagories_id == $catagory->id)
                    <li>
                        {{ $subcatagory->subcatagories }}
                        <ul>
                          @if(count($sub2catagories)>0)
                            @foreach ($sub2catagories as $sub2catagory)
                              @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                                <li>{{ $sub2catagory->subcatagories2 }}</li>
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
