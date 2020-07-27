@extends('dashboard.layout')

@section('htmlTitle')
    Ulpiano
@endsection

@section('pageTitle')
    Inicio
@endsection

@section('rutaActual')
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
    <li class="breadcrumb-item active">Dashboard</li>
  </ol>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="small-box bg-gradient-success">
            <div class="inner">
              <h3>25</h3>
              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>

            <!-- To simulate a loading state -->
            <div class="overlay dark">
                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
            </div>
            <!-- /.loading State -->

            <a href="#" class="small-box-footer">
              Más información <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
      </div>

      <div class="col-lg-6">
        <div class="small-box bg-info">
            <div class="inner">
              <h3>100</h3>
              <p>Eventos Pendientes</p>
            </div>
            <div class="icon">
              <i class="far fa-calendar-alt"></i>
            </div>

            <!-- To simulate a loading state -->
             <div class="overlay dark">
                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
            </div>
            <!-- /.loading State -->

            <a href="#" class="small-box-footer">
              Más información <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
      </div>
    </div>
</div>

@endsection