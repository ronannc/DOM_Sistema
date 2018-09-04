{{ csrf_field() }}
<div class="box-body">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('name',$provider->email)}}">
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="{{old('name',$provider->nome)}}" required>
    </div>
    <br>
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" value="{{old('name',$provider->telefone)}}">
    </div>
</div>