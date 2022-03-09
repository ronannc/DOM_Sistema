{{ csrf_field() }}
<div class="box-body">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('name',$provider->email)}}">
    </div>
    <br>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" value="{{old('name',$provider->name)}}" required>
    </div>
    <br>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone" value="{{old('phone',$provider->phone)}}">
    </div>
    <br>
    <div class="form-group">
        <label for="doc">Documento</label>
        <input type="text" id="doc" name="doc" class="form-control" placeholder="Documento" value="{{old('doc',$provider->doc)}}">
    </div>
    <br>
    <div class="form-group">
        <label for="adress">Endereco</label>
        <input type="text" id="address" name="address" class="form-control" placeholder="Endereco" value="{{old('address',$provider->address)}}">
    </div>
</div>
