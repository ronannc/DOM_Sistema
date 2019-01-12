{{ csrf_field() }}
<div class="box-body">
    <div class="form-group">
        <label for="client_id">E-mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('name',$client->email)}}">
    </div>
    <br>
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" value="{{old('name',$client->name)}}" required>
    </div>
    <br>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" id="phone" name="phone" class="form-control" placeholder="Telefone" value="{{old('phone',$client->phone)}}">
    </div>
    <br>
    <div class="form-group">
        <label for="doc">Documento</label>
        <input type="text" id="doc" name="doc" class="form-control" placeholder="Documento" value="{{old('doc',$client->doc)}}">
    </div>
    <br>
    <div class="form-group">
        <label for="adress">Endereco</label>
        <input type="text" id="adress" name="adress" class="form-control" placeholder="Endereco" value="{{old('adress',$client->adress)}}">
    </div>
</div>
