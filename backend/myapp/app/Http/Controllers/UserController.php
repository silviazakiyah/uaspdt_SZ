// backend/myapp/app/Http/Controllers/UserController.php

use App\Models\User;

public function store(Request $request)
{
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return response()->json($user, 201);
}

public function show($id)
{
    $user = User::find($id);
    return response()->json($user);
}

public function update(Request $request, $id)
{
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return response()->json($user);
}

public function destroy($id)
{
    $user = User::find($id);
    $user->delete();

    return response()->json(null, 204);
}


