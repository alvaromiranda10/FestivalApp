@extends('layouts.app')

@section('content')

<div class="container" style="padding-top: 5em;">
  <div class="row">
    <div class="col-md-12">
        <h1 class="display-4 text-center"><u>Tours</u></h1>
    </div>

    <div class="col-md-10  mx-auto table-responsive">
      <table class="table table-hover bg-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Tour</th>
            <th scope="col">Puntos</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <a class="btn btn-success" href="#">Actuar</a>
                <a class="btn btn-danger" href="#">Baja</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
                <a class="btn btn-success" href="#">Actuar</a>
                <a class="btn btn-danger" href="#">Baja</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
                <a class="btn btn-success" href="#">Actuar</a>
                <a class="btn btn-danger" href="#">Baja</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('script')
    <script>
        
    </script>
@endsection