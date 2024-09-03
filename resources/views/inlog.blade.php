@extends('layouts.app')

@section('content')
    <h1>Form Page</h1>
    <p>Fill out the form below:</p>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">naam</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-input mt-1 block w-full" />
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">wachtwoord</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-input mt-1 block w-full" />
            @error('password')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        
        <button type="submit" class="bg-blue-500 bg-red px-4 py-2 rounded">Submit</button>
    </form>
@endsection