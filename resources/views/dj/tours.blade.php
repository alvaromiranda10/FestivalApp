@extends('layouts.app')

@section('content')

<div class="container" style="padding-top: 5em;">
  <div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center">Tours</h1>
    </div>

    <div class="col-md-10  mx-auto table-responsive">
      <table class="table table-hover bg-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Festivales</th>
            <th scope="col">Puntos</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($festivals as $festival)
            <tr>
              <th scope="row">{{ $festival->id }}</th>
              <td>{{ $festival->name }}</td>
              <td>{{ $festival->points }}</td>
              <td>

                @if( isset($festivalsByUser[$festival->id]))
                  <button onclick="cancelar(this)" class="btn-cancelar btn btn-danger" data-delete{{$festival->id}}="{{ route('festival.destroy', $festival->id) }}" data-id="{{ $festival->id }}">Cancelar</button>   
                @else
                  <button onclick="actuar(this)" class="btn-actuar btn btn-success" data-delete{{$festival->id}}="{{ route('festival.destroy', $festival->id) }}" data-id="{{ $festival->id }}">Actuar</button>   
                @endif

              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('script')
    <script>

        var cancelar = function(e) {
          let festival_id = $(e).data("id");
          let url_delete = $(e).data(`delete${festival_id}`);
          $.ajax({
              headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: "DELETE",
              url: url_delete,
              success: function(response){ 
                console.log(response);
                $(`[data-id="${ festival_id}"]`).replaceWith(`
                <button onclick="actuar(this)" class="btn-actuar btn btn-success" data-delete${ festival_id }="${ url_delete }" data-id="${ festival_id }">Actuar</button>   
                `);
              },
              error: function(){
                alert('error');
              }
            });
        };

        var actuar = function(e){
          let festival_id = $(e).data("id");
          let url_delete = $(e).data(`delete${ festival_id }`);
            $.ajax({
              headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: "POST",
              url: ' {{ route('festival.store') }}',
              data: {"festival_id": festival_id},
              dataType: 'json',
              success: function(response){ 
                console.log(response);
                $(`[data-id="${ festival_id }"]`).replaceWith(`
                <button onclick="cancelar(this)" class="btn-cancelar btn btn-danger" data-delete${ festival_id }="${ url_delete }" data-id="${ festival_id }">Cancelar</button>   
                `);
              },
              error: function(){
                alert('error');
              }
            });
        }

    </script>
@endsection