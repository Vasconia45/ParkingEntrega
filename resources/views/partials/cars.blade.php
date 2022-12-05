<tr>
    <th>{{ $car->plate }}</th>
    <th>{{ $car->brand }}</th>
    <th>{{ $car->model }}</th>
    <th>{{ $car->user->name}}</th>
    <form action="{{ route('car.delete', $car->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <th><button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i>Delete</button></th>
    </form>
    <form>
        <th><button type="submit" formaction="{{ route('editcar', $car->id) }}" class="btn btn-success"><i class="bi bi-pencil-fill"></i>Edit</button></th>
    </form>
</tr>