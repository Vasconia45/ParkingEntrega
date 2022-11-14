<tr>
    <th>{{ $user->id }}</th>
    <th>{{ $user->name }}</th>
    <th>{{ $user->dni }}</th>
    <form action="{{ route('user.delete', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <th><button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i>Delete</button></th>
    </form>
    <form>
        <th><button type="submit" formaction="{{ route('edituser', $user->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i></i>Edit</button></th>
    </form>
</tr>