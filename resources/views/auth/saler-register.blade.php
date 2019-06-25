@extends('layouts.master')
@section('content')
<div class="row mb-3">
  <div class="col-12 text-center">
    <h2>Saler Register</h2>
  </div>
</div>
<div class="row">
  <div class="col-4 offset-4">
    <form class="student-registration" action="{{ route('saler.register.submit') }}" method="post">
      {{ csrf_field() }}
      <table>
        <tr>
          <td>
            <label for="name">Name:</label>
          </td>
          <td>
            <input type="text" name="name" id="name" required>
            @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </td>
        </tr>
        <tr>
          <td>
            <label for="email">Email:</label>
          </td>
          <td>
            <input type="text" name="email" id="email" required>
            @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </td>
        </tr>
        <tr>
          <td>
            <label for="password">Password</label>
          </td>
          <td>
            <input type="text" name="password" id="password" required>
            @error('password')
              <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </td>
        </tr>
        <tr>
          <td></td>
          <td>
            <button type="submit" name="button" class="btn btn-success">Submit</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>

@endsection
