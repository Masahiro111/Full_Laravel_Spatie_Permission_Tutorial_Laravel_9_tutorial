<x-admin-layout>
    <div class="w-full py-12">

        {{-- table --}}
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('admin.roles.index') }}" class="px-4 py-2 text-sm text-white bg-gray-800 rounded-md hover:bg-gray-600">Back Role Index</a>
            </div>
            <div class="flex flex-col">
                <form method="POST" action="{{ route('admin.roles.store') }}">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Role name </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="name" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <button type="submit" class="px-4 py-2 text-sm text-white bg-gray-800 rounded-md hover:bg-gray-600">Create</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- / table --}}


    </div>
</x-admin-layout>