{{ csrf_field() }}
<div class="box-body">
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{old('name',$account->nome)}}" required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input type="text" id="valor" name="valor" class="form-control" placeholder="Valor" value="{{old('name',$account->valor)}}">
    </div>
    <div class="form-group">
        <div class="radio">
            <label><input type="radio" name="tipo" value="1" <?php if($account->tipo){echo "checked";} ?>>Entrada</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="tipo" value="0"  <?php if(!$account->tipo){echo "checked";} ?>>Saida</label>
        </div>
    </div>
    <div class="form-group">
        Parcelado
        <div class="radio">
            <label><input type="radio" name="parcelado" value="1" <?php if($account->parcelado){echo "checked";} ?>>Sim</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="parcelado" value="0" <?php if(!$account->parcelado){echo "checked";} ?>>Nao</label>
        </div>
    </div>
    <div class="form-group">
        Primeira parcela este mes (Entrada)
        <div class="radio">
            <label><input type="radio" name="entrada" value="1" <?php if($account->entrada){echo "checked";} ?>>Sim</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="entrada" value="0" <?php if(!$account->entrada){echo "checked";} ?>>Nao</label>
        </div>
    </div>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input type="text" id="parcelas" name="parcelas" class="form-control" placeholder="Parcelas" value="{{old('name',$account->parcelas)}}">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input type="text" id="client_id" name="client_id" class="form-control" placeholder="ID Cliente" value="{{old('name',$account->client_id)}}">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input type="text" id="provider_id" name="provider_id" class="form-control" placeholder="ID Forcedor" value="{{old('name',$account->provider_id)}}">
    </div>
</div>