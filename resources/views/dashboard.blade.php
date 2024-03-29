<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div> 
                <a href="{{ route('class.index') }}" class="btn btn-info btn-sm">Class</a>
                    <a href="{{ route('students.index')}}" class="btn btn-info danger">Students</a>
                <!-- <form method="post" action=" {{ route('store.user')}}">
                    @csrf
                    <div>
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>

                    </div><br>
                    <button type="submit" class="btn btn-primary" > Submit</button>
                </form> -->
            </div>
        </div>
    </div>
</x-app-layout>
