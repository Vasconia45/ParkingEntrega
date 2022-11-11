<tr>
    <th>{{ $car->plate }}</th>
    <th>{{ $car->brand }}</th>
    <th>{{ $car->model }}</th>
    <form action="{{ route('car.delete', $car->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <th><button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill text-white"></i>Delete</button></th>
    </form>
</tr>