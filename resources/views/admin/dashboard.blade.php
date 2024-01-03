ini admin
<form action="{{ route('signOut') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>


