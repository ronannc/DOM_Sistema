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
    <br>
    <div class="form-group">
        <div class="radio">
            <label><input type="radio" name="tipo" value="1" checked>Entrada</label>
        </div>
        <div class="radio">
            <label><input type="radio" name="tipo" value="0">Saida</label>
        </div>
    </div>
</div>