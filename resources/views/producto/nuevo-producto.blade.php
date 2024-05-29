@extends('layouts.default')
@section('content')

<h1>Nuevo Producto</h1>

<form action="<?= url('producto/create') ?>" method="post">

    <?= csrf_field() ?>

    <div class="mb-3 row">
        <label for="codigo" class="col-sm-1 col-form-label">Código</label>
        <div class="col-sm-4">
            <input type="search" name="codigo" id="codigo" class="form-control @error('name') is-invalid @enderror" value="<?= old('codigo') ?>" />
        </div>

        <!-- muestra el error del campo usando php -->
        <?php if ($errors->has('codigo')) : ?>
            <span class="text-danger"><?= $errors->first('codigo') ?></span>
        <?php endif ?>
    </div>

    <div class="mb-3 row">
        <label for="nombre" class="col-sm-1 col-form-label">Nombre</label>
        <div class="col-sm-4">
            <input type="search" name="nombre" id="nombre" class="form-control" value="<?= old('nombre') ?>" />
        </div>

        <!-- muestra el error del campo usando php -->
        <?php if ($errors->has('nombre')) : ?>
            <span class="text-danger"><?= $errors->first('nombre') ?></span>
        <?php endif ?>
    </div>

    <div class="mb-3 row">
        <label for="precio" class="col-sm-1 col-form-label">Precio</label>
        <div class="col-sm-4">
            <input type="text" inputmode="numeric" name="precio" id="precio" class="form-control" value="<?= old('precio') ?>" />
        </div>

        <!-- muestra el error del campo usando blade -->
        @error('precio')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>


    <div class="col-auto">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>


@stop