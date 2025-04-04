<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cadastrar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    
<div class="container">
    
    <form class="form-organization" action="{{ route("user.store") }}" method="POST">
        @if ($errors->any())
    <div class="alert">
        @foreach ($errors->all() as $error) 
            <p class="alert-p">{{ $error }}</p>
        @endforeach
    </div>
@endif
        @csrf

        <label>Nome</label>
        <input type="text" name="name"  id="name" placeholder="Nome do usuário" value="{{ old('name') }}" required>
        

        <label>Email</label>
        <input type="text" name="email" id="Email" placeholder="Email do usuário" value="{{ old('email') }}" required>
       


        <label>Senha</label>
        <input type="password" name="password" id="Password" placeholder="Senha do usuário" value="{{ old('password') }}" required>
        

        <button type="submit">cadastrar</button>
    </form>
</div>

</body>
</html>