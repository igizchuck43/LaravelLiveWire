<div>


    {{-- <h1>{{ $title}}</h1>

    <h2>{{count($users)}}</h2>

    <button wire:click="createNewUser">
        Create New User
    </button> --}}

    <form class="mt-4 mx-auto w-1/4" wire:submit="createNewUser" action="">

        @if (session()->has('success'))
            <div class="bg-green-300 text-green-800 p-3 mb-3 mt-3">
                {{ session('success') }}
            </div>
          @endif  

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model='name' type="text" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror
        
        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model='email' type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <input class="block rounded border border-gray-100 px-3 py-1 mb-1" wire:model='password' type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs">{{ $message }}</span>
        @enderror

        <button class="block rounded bg-gray-400 px-3 text-white">Create</button>
    </form>

    <hr>
    @foreach ($users as $user)
        <h2>{{ $user->name }}</h2>
    @endforeach


</div>
