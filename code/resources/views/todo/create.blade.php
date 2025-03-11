<form method="POST" action="{{ route('todo.store') }}">  
    @csrf
    
    <input name="title" type="text" placeholder="Title">
    <input type="submit" value="Create">
</form
