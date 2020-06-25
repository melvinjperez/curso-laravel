@extends("theme.$theme.layout")
@section('titulo')
   Area Menús
@endsection
@section('scripts')
    <script src = "{{asset("assets/pages/scripts/admin/menu/crear.js")}}"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('include.form-error')
        @include('include.mensaje')
        <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Crear Menú</h3>
            </div>
            <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
                <div class="card-body">
                    @include('admin.menu.form')
                </div>
                <div class="card-footer row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-3">
                        @include('include.boton-form-crear')
                    </div>                
                </div>
            </form>            
        </div>    
    </div>
</div>
@endsection