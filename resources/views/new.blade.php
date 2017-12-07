<html>
  <ul>
    @foreach ($tasks as $task)
      <li> {{$task->tasks}} </li>
    @endforeach
  </ul>
</html>
