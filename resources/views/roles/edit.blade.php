<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update role') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sm:max-w-xl max-w-xs mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('roles.update',$role) }}">
                @csrf
                @method('PATCH')
                <div>

                    <x-input id="role" class="block mt-1 w-full" type="text" name="role" value="{{ $role->name }}" required autofocus />
                </div>

                
                
                <div class="flex items-center justify-end mt-4">

                    <x-button class="ml-3">
                        {{ __('Update Role') }}
                    </x-button>
                    <a href="{{ route('roles') }}" class="px-2">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
