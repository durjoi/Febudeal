  <nav class="admin__nav">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <a href="{{ route('admin.dashboard') }}"><h2>Febudeal Admin</h2></a> 
        </div>
        <div class="col-md-8 text-right">
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><button type="button" name="button">Log out</button></a> </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </nav>
