@if (session('mensaje'))   
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-check"></i> Mensaje Sistema de Biblioteca!</h5>   
    </div>
    <ul>
       <li>{{ session('mensaje') }}</li>
    </ul>    
@endif
  