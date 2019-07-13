@extends('saler.saler')

@section('products')
  {{-- <div class="col-md-10">
    <div class="productsheader">
      <h3>Products</h3>
      <ul>
        <li> <a href="{{ route('saler.dashboard') }}">Live</a> </li>
        <li> <a href="{{ route('saler.pending') }}" class="active">Pending</a> </li>
        <li> <a href="#">Hold</a> </li>

      </ul>
    </div> --}}

    <div class="col-md-10">
        <h3>Post Your Add</h3>
        <h2>Catagory</h2>

        <ul>
          <li> <a href="#">Propertise</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'For Sale: Houses & Apartments' }}">For Sale: Houses & Apartments</a> </li>
              <li><a href="/saler/upload/product/{{ 'For Rent: Houses & Apartments' }}">For Rent: Houses & Apartments</a> </li>
              <li><a href="/saler/upload/product/{{ 'Lands & Plots' }}">Lands & Plots</a> </li>
              <li><a href="/saler/upload/product/{{ 'For Rent: Shops & Office' }}">For Rent: Shops & Office</a> </li>
              <li><a href="/saler/upload/product/{{ 'For Sale: Shops & Offices' }}">For Sale: Shops & Offices</a> </li>
              <li><a href="/saler/upload/product/{{ 'PG & Guest Houses' }}">PG & Guest Houses</a> </li>
            </ul>
          </li>
          <li> <a href="#">Cars</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Cars' }}">Cars</a> </li>
              <li><a href="/saler/upload/product/{{ 'Commercial Vehicles' }}">Commercial Vehicles</a> </li>
              <li><a href="/saler/upload/product/{{ 'Spare Parts' }}">Spare Parts</a> </li>
              <li><a href="/saler/upload/product/{{ 'Other Vehicles' }}">Other Vehicles</a> </li>
            </ul>
          </li>
          <li> <a href="#">Furniture</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Sofa & Dining' }}">Sofa & Dining</a> </li>
              <li><a href="/saler/upload/product/{{ 'Beds & Wardrobes' }}">Beds & Wardrobes</a> </li>
              <li><a href="/saler/upload/product/{{ 'Home Decor & Garden' }}">Home Decor & Garden</a> </li>
              <li><a href="/saler/upload/product/{{ 'Kids Furniture' }}">Kids Furniture</a> </li>
              <li><a href="/saler/upload/product/{{ 'Other Household Items' }}">Other Household Items</a> </li>
            </ul>
          </li>
          <li> <a href="#">Electronics & Appliances</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'TVs, Video-Audio' }}">TVs, Video-Audio</a> </li>
              <li><a href="/saler/upload/product/{{ 'Kitchen & Other Appliances' }}">Kitchen & Other Appliances</a> </li>
              <li><a href="/saler/upload/product/{{ 'Computers & Laptops' }}">Computers & Laptops</a> </li>
              <li><a href="/saler/upload/product/{{ 'Cameras & Lenses' }}">Cameras & Lenses</a> </li>
              <li><a href="/saler/upload/product/{{ 'Games & Entertainment' }}">Games & Entertainment</a> </li>
              <li><a href="/saler/upload/product/{{ 'Fridges' }}">Fridges</a> </li>
              <li><a href="/saler/upload/product/{{ 'Computer Accessories' }}">Computer Accessories</a> </li>
              <li><a href="/saler/upload/product/{{ 'Hard Disks, Printers & Monitors' }}">Hard Disks, Printers & Monitors</a> </li>
              <li><a href="/saler/upload/product/{{ 'ACs' }}">ACs</a> </li>
              <li><a href="/saler/upload/product/{{ 'Washing Machines' }}">Washing Machines</a> </li>
            </ul>
          </li>
          <li> <a href="#">Mobiles</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Mobiles' }}">Mobile Phones</a> </li>
              <li><a href="/saler/upload/product/{{ 'Accessories' }}">Accessories</a> </li>
              <li><a href="/saler/upload/product/{{ 'Tablets' }}">Tablets</a> </li>
            </ul>
          </li>
          <li> <a href="#">Bikes</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Motorcycles' }}">Motorcycles</a> </li>
              <li><a href="/saler/upload/product/{{ 'Scooters' }}">Scooters</a> </li>
              <li><a href="/saler/upload/product/{{ 'Spare Parts' }}">Spare Parts</a> </li>
              <li><a href="/saler/upload/product/{{ 'Bicycles' }}">Bicycles</a> </li>
            </ul>
          </li>
          <li> <a href="#">Books, Sports & Hobbies</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Bicycles' }}">Books</a> </li>
              <li><a href="/saler/upload/product/{{ 'Gym & Fitness' }}">Gym & Fitness</a> </li>
              <li><a href="/saler/upload/product/{{ 'Musical Instruments' }}">Musical Instruments</a> </li>
              <li><a href="/saler/upload/product/{{ 'Sports Equipment' }}">Sports Equipment</a> </li>
              <li><a href="/saler/upload/product/{{ 'Other Hobbies' }}">Other Hobbies</a> </li>
            </ul>
          </li>
          <li> <a href="#">Fashion</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Men' }}">Men</a> </li>
              <li><a href="/saler/upload/product/{{ 'Women' }}">Women</a> </li>
              <li><a href="/saler/upload/product/{{ 'Kids' }}">Kids</a> </li>
            </ul>
          </li>
          <li> <a href="#">Pets</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Fishes & Aquarium' }}">Fishes & Aquarium</a> </li>
              <li><a href="/saler/upload/product/{{ 'Pet Food & Accessories' }}">Pet Food & Accessories</a> </li>
              <li><a href="/saler/upload/product/{{ 'Dogs' }}">Dogs</a> </li>
              <li><a href="/saler/upload/product/{{ 'Other Pets' }}">Other Pets</a> </li>
            </ul>
          </li>
          <li> <a href="#">Services</a>
            <ul>
              <li><a href="/saler/upload/product/{{ 'Electronics & Computer' }}">Electronics & Computer</a> </li>
              <li><a href="/saler/upload/product/{{ 'Education & Classes' }}">Education & Classes</a> </li>
              <li><a href="/saler/upload/product/{{ 'Drivers & Taxi' }}">Drivers & Taxi</a> </li>
              <li><a href="/saler/upload/product/{{ 'Health & Beauty' }}">Health & Beauty</a> </li>
              <li><a href="/saler/upload/product/{{ 'Other Services' }}">Other Services</a> </li>
            </ul>
          </li>
        </ul>
    </div>

@endsection
