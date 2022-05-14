<table>


@foreach($selectKey as $items)

<tr>
  <td>{{$items->name}}</td>
  <td>{{$items->class}}</td>
  <td>{{$items->roll}}</td>
</tr>

@endforeach
</table>