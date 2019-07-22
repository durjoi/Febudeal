@extends('admin.admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="catagory__header">
          <h3>Catgory</h3>
          <a href="{{ route('admin.catagory.add') }}">Add Catagory</a>
          <a href="{{ route('admin.subcatagory.add.catagory') }}">Add Sub Catagory</a>
          <a href="{{ route('admin.sub2catagory.add.catagory') }}">Add Sub Sub Catagory</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="admin__catagory">
            <ul>
              @if (count($catagories)>0)
                @foreach ($catagories as $catagory)
                    <li class="catagory__toggler">{{ $catagory->catagory }}
                      <button class="catagorydelete__button" type="button" name="button">
                        <i class="fas fa-trash-alt"></i>
                        <form id="delete_catagory" action="{{ route('admin.catagory.delete', $catagory->id) }}" method="post" style="display: none;">
                            @csrf
                        </form>
                      </button>

                      <div class="admin__subcatagory">
                        <ul>
                          @if (count($subcatagories)>0)
                            @foreach ($subcatagories as $subcatagory)
                              @if ($subcatagory->catagories_id == $catagory->id)
                                <li class="subcatagory__toggler">{{ $subcatagory->subcatagories }}
                                  <button class="catagorydelete__button" type="button" name="button">
                                    <i class="fas fa-trash-alt"></i>
                                    <form id="delete_catagory" action="{{ route('admin.subcatagory.delete', $subcatagory->id) }}" method="post" style="display: none;">
                                        @csrf
                                    </form>
                                  </button>
                                  <div class="admin__sub2catagory">
                                    <ul>
                                      @if (count($sub2catagories)>0)
                                        @foreach ($sub2catagories as $sub2catagory)
                                          @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                                            <li>{{ $sub2catagory->subcatagories2 }}
                                              <button class="catagorydelete__button" type="button" name="button">
                                                <i class="fas fa-trash-alt"></i>
                                                <form id="delete_catagory" action="{{ route('admin.sub2catagory.delete', $sub2catagory->id) }}" method="post" style="display: none;">
                                                    @csrf
                                                </form>
                                              </button>
                                            </li>
                                          @endif
                                        @endforeach

                                      @endif
                                    </ul>
                                  </div>
                                </li>
                              @endif
                            @endforeach
                          @endif
                        </ul>
                      </div>
                    </li>
                @endforeach
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  {{-- <ul>
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
  </ul> --}}
@endsection
