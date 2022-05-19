<x-admin-layout>
    <div class="w-full py-12">

        {{-- table --}}
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4">
                <a href="{{ route('admin.permissions.create') }}" class="px-4 py-2 text-sm text-white bg-gray-800 rounded-md hover:bg-gray-600">Create Permission</a>
            </div>
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name</th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                {{ $permission->name }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="flex justify-end">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('admin.permissions.edit', $permission->id) }}" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-700">Edit</a>
                                                    <form class="px-4 py-2 text-white bg-red-500 rounded-md hover:bg-red-700" method="POST" action="{{ route('admin.permissions.destroy', $permission->id) }}" onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- / table --}}

    </div>
</x-admin-layout>