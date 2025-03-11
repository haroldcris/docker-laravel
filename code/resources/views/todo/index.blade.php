<table>
    
    @foreach($content as $todo)        
    <tr>
        <td >
            <form action="{{route('todo.edit', $todo->rowId)}}" method="get"> 
                @csrf 
                <button type="submit">Edit</button>
            </form></p> 

            <form action="{{route('todo.destroy', $todo->rowId)}}" method="post"> 
                @csrf 
                @method('DELETE')
                <input hidden name="rowId" value="{{$todo->rowId}}" />
                <button type="submit">Delete</button>
            </form>
        </td>
        <td>
            <div>{{ $todo->title }} - {{$todo->rowId}} </div>
        </td>
    </tr>
    @endforeach
</table>