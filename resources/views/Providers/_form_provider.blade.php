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
</div>
