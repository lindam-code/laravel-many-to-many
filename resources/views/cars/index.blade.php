<h1>Cars list</h1>
<div>
  <a href="{{route('cars.create')}}">Add new car</a>
</div>
<br>
<br>
@foreach ($cars as $car)
  <div>
    <a href="{{ route('cars.show', $car)}}" >{{$car->manifacturer}} {{ $car->engine}}</a>
    <span> <a href="{{ route('cars.edit', $car) }}">Edit</a> </span>

    <form class="form" action="{{ route('cars.destroy',$car->id) }}" method="post">
    @csrf
    @method('DELETE')
      <input type="submit" onclick="return confirm('Are you sure?')" value="Delete">
    </form>

  </div>
@endforeach
