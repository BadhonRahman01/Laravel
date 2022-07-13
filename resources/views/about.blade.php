This is my about page

<a href="{{ url('/')}}" class="ml-1 underline">  
    Go back to home
</a>
<h1> Store your contacts</h1>
<br>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form action="{{ route('student.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Write your Name"><br>
    <input type="email" name="email" placeholder="Write your Email"><br>
    <button type="submit">Submit </button>
</form>