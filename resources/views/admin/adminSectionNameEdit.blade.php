<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Febudeal Admin</title>

    @include('pertials.styles')


  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center">
          <form class="" action="{{ route('section.name.update', $sections[0]->id) }}" method="post">
            @csrf
            <label for="section_one">Section One</label><br>
            <input type="text" name="section_one" value="{{ $sections[0]->section_one }}" id="section_one" required><br>

            <label for="section_two">Section two</label><br>
            <input type="text" name="section_two" value="{{ $sections[0]->section_two }}" id="section_two" required><br>

            <label for="section_three">Section three</label><br>
            <input type="text" name="section_three" value="{{ $sections[0]->section_three }}" id="section_three" required><br>

            <label for="section_four">Section four</label><br>
            <input type="text" name="section_four" value="{{ $sections[0]->section_four }}" id="section_four" required><br>

            <label for="section_five">Section five</label><br>
            <input type="text" name="section_five" value="{{ $sections[0]->section_five }}" id="section_five" required><br>

            <label for="section_six">Section six</label><br>
            <input type="text" name="section_six" value="{{ $sections[0]->section_six }}" id="section_six" required><br>

            <label for="section_seven">Section seven</label><br>
            <input type="text" name="section_seven" value="{{ $sections[0]->section_seven }}" id="section_seven" required><br>

            <label for="section_eight">Section eight</label><br>
            <input type="text" name="section_eight" value="{{ $sections[0]->section_eight }}" id="section_eight" required><br>

            <label for="section_nine">Section nine</label><br>
            <input type="text" name="section_nine" value="{{ $sections[0]->section_nine }}" id="section_nine" required><br>

            <label for="section_ten">Section ten</label><br>
            <input type="text" name="section_ten" value="{{ $sections[0]->section_ten }}" id="section_ten" required><br>

            <input type="submit" name="submit" value="submit">
          </form>
        </div>
      </div>
    </div>


  @include('pertials.scripts')
  </body>
</html>
