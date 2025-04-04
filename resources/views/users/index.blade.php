<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class=page-organization>
    <div class="card-organization">
        
    @forelse ($users as $user)
    <div class="card">
            <p class="text-user">{{ $user->name }}</p>
            <p class="text-user">{{ $user->email }}</p>
            <form method="GET" action="{{ route('user.edit', $user->id) }}">
                @csrf
                @method('update')
                <button type="submit" class="btn-user">Editar</button>
            </form>
                <form method="POST"  action="{{ route('user.destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn-user">Deletar</button>
                </form>
            </div>
    @empty

    @endforelse

</div>
</div>

</body>
</html>