@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Carreras</h2>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach($careers as $career)
            <tr>
                <td>{{$career->codigo}}</td>
                <td>{{$career->nombre}}</td>
                <td>{{$career->descripcion}}</td>
                <td>{{$career->acciones}}</td>
                <td>
                    <!--  
                    
                    </form>-->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection