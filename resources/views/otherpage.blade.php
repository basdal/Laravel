@extends('layouts.app')

@section('content')
    <h1>Form Page</h1>
    <p>Fill out the form below:</p>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

<form action="{{ route('form.submit') }}"
      method="POST">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-input mt-1 block w-full"/>
        @error('name')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block text-gray-700">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-input mt-1 block w-full"/>
        @error('email')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="message" class="block text-gray-700">Message</label>
        <textarea id="message" name="message" rows="4"
                  class="form-textarea mt-1 block w-full">{{ old('message') }}</textarea>
        @error('message')
        <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="bg-blue-500 bg-red px-4 py-2 rounded">Submit</button>
</form>
@endsection
