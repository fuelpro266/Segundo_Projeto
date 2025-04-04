<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="page-organization">
    <div class="card-organization">
        <div class="card">
            <input class="text-user" value={{ $user->name }} ></input>
            <input class="text-user" value={{ $user->email }}></input>

            
            <form method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PUT')
                <button type="submit" class="btn-user">Confirmar</button>
            </form>
        
        </div>
    </div>
</div>

</body>
</html>
