@extends('layouts.permisos')
@section('content')

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-6">
                <h4 class="font-weight-bold py-3 mb-0">Productos</h4>
            </div>

        </div>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Productos</li>
                <li class="breadcrumb-item active">Editar</li>
            </ol>
        </div>

    <div class="card mb-4">
        <h6 class="card-header">Editar Producto</h6>
        <div class="card-body">
            <form action="{{ route('producto.update',$producto->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nombre<span style="color:red;"> *</span></label>
                        <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Precio<span style="color:red;"> *</span></label>
                        <input type="number" name="precio" value="{{ $producto->precio }}" required min="0" step="0.01" class="form-control" required>
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label>Stock<span style="color:red;"> *</span></label>
                        <input type="number" name="stock" value="{{ $producto->stock }}" min="0" step="1" pattern="\d+" class="form-control" required>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Descripción<span style="color:red;"> *</span></label> <br>
                        <textarea name="descripcion" class="form-control" id="" cols="30" rows="4" required>{{$producto->descripcion}}</textarea>
                        
                        <div class="clearfix"></div>
                    </div>
                    
                </div>
                


                <button type="submit" class="btn btn-primary">Guardar</button>
                <a type="button" href="{{ route('producto.index') }}" class="btn btn-secondary">Cancelar</a>
                
            </form>
        </div>
    </div>

</div>
    <!-- [ Layout content ] Start -->
@endsection