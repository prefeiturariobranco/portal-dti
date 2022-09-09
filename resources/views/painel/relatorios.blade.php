@extends('templates.dashboard')
@section('titulo')
    Intranet :: Ti Local
@endsection
@section('js')@endsection

@section('content')
    <div class="page-title-box">
        <div class="row">
            <h4>Painel de controle</h4>
        </div>

    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <form>

                                <div class="form-group">

                                    <select class="custom-select" id="exampleFormControlSelect1">

                                        @foreach($relatorios as $relatorio)
                                            <option value="{{ $relatorio->id }}">{{ $relatorio->nome }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Formato</label>
                                    <select class="custom-select" id="exampleFormControlSelect1">
                                        <option>PDF</option>
                                        <option>EXCEL</option>
                                        <option>TXT</option>

                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary font-weight-bold">Gerar</button>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> <!-- end row -->

@endsection
