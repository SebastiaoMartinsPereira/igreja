@extends('layouts.dashboard.layout')

@section('conteudo')

<h3><i class="fa fa-angle-right"></i> Cadastro de Células</h3>

<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
  <div class="col-lg-12">
    
    <form class="form-horizontal style-form" method="post" action="/celulas/cadastrar/save">
        <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Nova Célula</h4>
                
            <div class="form-group">
                <label class="col-sm-1  control-label">Nome</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="nome">
                </div>  
            </div> 

            <div class="form-group">
                <label class="col-sm-1  control-label">Descrição</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="descricao">
                </div>  
            </div>   

            <div class="form-group">
                <label class="col-sm-1  control-label">Líder</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" name="lider">
                </div>  
            </div>  

            <div class="form-group">
                <div class="col-sm-11 grupo_btn_cadastro">
                    <button type="submit" class="btn btn-danger">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Limpar</button>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>  
            </div> 
        </div>
    </form>

  </div><!-- col-lg-12-->      	
</div><!-- /row -->
@stop