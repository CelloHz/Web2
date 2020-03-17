@extends('admin.layouts.principal')

@section('titulo', 'Agenda')

@section('acao', 'Formulário')

@section('conteudo-principal')

    <form method="POST" action="">

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="exampleFormControlInput1">Nome completo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

                <div class="form-group col-md-4">
                    <label for="exampleFormControlSelect1">Tipo de serviço</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Barba</option>
                        <option>Corte Social</option>
                        <option>Hidratação</option>
                        <option>Massagem Capilar</option>
                        <option>Sobrancelha</option>
                    </select>
                </div>
        </div>




        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Horário</label>
                <input type="text" class="form-control" id="exampleFormControlInput2">
            </div>

            <div class="form-group col-md-6">
                <label for="exampleFormControlInput1">Valor</label>
                <input type="text" class="form-control" id="exampleFormControlInput3" >
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>

@endsection
