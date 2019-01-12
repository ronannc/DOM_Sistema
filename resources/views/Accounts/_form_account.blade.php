{{ csrf_field() }}
<div class="box-body">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name"  placeholder="Nome" value="{{old('name',$account->name)}}" required>
    </div>

    <br>

    <div class="form-group">
        <label for="value">Valor</label>
        <input type="text" id="value" name="value" class="form-control" placeholder="Valor" value="{{old('value',$account->value)}}">
    </div>

    <div class="form-group">
        <div class="radio">
            <label><input type="radio" name="type" value="1" <?php if($account->type){echo "checked";} ?>>Entrada</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="type" value="0"  <?php if(!$account->type){echo "checked";} ?>>Saida</label>
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

    <div class="form-group">
        <label for="parcelas">Parcelas</label>
        <input type="text" id="parcelas" name="parcelas" class="form-control" placeholder="Parcelas" value="{{old('name',$account->parcelas)}}">
    </div>

    <br>

    <div class="form-group">
        <label for="client_id">Cliente</label>
        <select id="client_id" name="client_id" class="form-control">
			<?php foreach ($clients as $client): ?>
            <option value="{{$client->id}}">{{$client->name}}</option>
			<?php endforeach; ?>
        </select>
    </div>

    <br>

    <div class="form-group">
        <label for="provider_id">Fornecedor</label>
        <select id="provider_id" name="provider_id" class="form-control">
	        <?php foreach ($providers as $provider): ?>
                <option value="{{$provider->id}}">{{$provider->name}}</option>
            <?php endforeach; ?>
        </select>
    </div>

</div>
