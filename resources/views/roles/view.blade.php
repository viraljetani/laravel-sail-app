<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-end">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Roles Management') }}
            </h2>
        
            <a href="{{ route('roles.create') }}" class="btn btn-blue" title="Create New Role">Create New</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white">

                    <div class="table w-full">
                        <div class="table-row-group">
                            @foreach ($roles as $role)
                                
                                <div class="table-row border-solid border-gray-300">
                                    <div class="table-cell w-full align-middle hover:bg-green-100">
                                        <a href="{{ route('roles.show',$role->path()) }}">{{$role->name}}</a>
                                    </div>
                                    <div class="table-cell w-auto">
                                        <div class="flex flex-row">
                                            <a href="{{ route('roles.edit',$role->path()) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4" title="Edit">
                                                <x-heroicon-o-pencil-alt class="w-6 h-6"/>
                                            </a>
                                            <form method="POST" action="{{ route('roles.delete',$role->path()) }}">
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure?');" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 text-sm" type="submit">
                                                    <x-heroicon-o-trash class="w-6 h-6"/>
                                                </button>
                                                @method('DELETE')
                                                {{ csrf_field() }} 
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>