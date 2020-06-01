<form action="{{ url('sender') }}" method="post">
    <input type="text" name="text" />
    <button type="submit">Send</button>
    {{ csrf_field() }}
</form>
