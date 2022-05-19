<x-admin-layout>
    <div class="w-full py-12">

        {{-- table --}}
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('admin.permissions.index') }}" class="px-4 py-2 text-sm text-white bg-gray-800 rounded-md hover:bg-gray-600">Back Permissions Index</a>
            </div>
            <div class="flex flex-col">
                <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Permission name </label>
                        <div class="mt-1">
                            <input
                                   type="text"
                                   id="name"
                                   name="name"
                                   class="block w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white border border-gray-400 rounded-md appearance-none sm:text-sm sm:leading-5"
                                   value="{{ $permission->name }}" />
                        </div>
                        @error('name')
                        <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="pt-5 sm:col-span-6">
                        <button type="submit" class="px-4 py-2 text-sm text-white bg-gray-800 rounded-md hover:bg-gray-600">Update</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- / table --}}

    </div>
</x-admin-layout>