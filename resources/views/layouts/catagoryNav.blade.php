<div class="catagorynav">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">

        <ul class="catagorynav__mainlist">
          @if (count($catagories)>0)
            @foreach ($catagories as $catagory)
              <li class="catagorynav__mainlist__item">
                <a href="{{ route('catagory.products', $catagory->id) }}">{{ $catagory->catagory}}</a>
                {{-- catagory Dropdown --}}
                <div class="catagory__dropdown">
                  <ul class="catagorynav__sublist">
                    <div class="container-fluid">
                      <div class="row">

                        @if (count($subcatagories)>0)
                          @foreach ($subcatagories as $subcatagory)
                            @if ($subcatagory->catagories_id == $catagory->id)
                              <div class="col-md-2">
                                <li class="sublist__item">
                                    <a href="{{ route('subcatagory.products', $subcatagory->id) }}">{{ $subcatagory->subcatagories }}</a>
                                    <ul class="sublist__sublist">
                                      @if(count($sub2catagories)>0)
                                        @foreach ($sub2catagories as $sub2catagory)
                                          @if ($sub2catagory->subcatagories_id == $subcatagory->id)
                                            <li class="sublist__sublist__item">
                                              <a href="{{ route('sub2catagory.products', $sub2catagory->id) }}">{{ $sub2catagory->subcatagories2 }}</a>
                                            </li>
                                          @endif
                                        @endforeach
                                      @endif
                                    </ul>
                                  </li>
                                  </div>
                            @endif
                          @endforeach
                        @endif

                      </div>
                    </div>
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
