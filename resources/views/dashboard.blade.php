<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
               <div class="table">
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Title</th>
                                <th class="px-4 py-2">Body</th>
                                <th class="px-4 py-2">Created</th>
                                <th class="px-4 py-2">Updated</th>
                                <th class="px-4 py-2">User</th>
                                <th class="px-4 py-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td class="border px-4 py-2">{{ $post->title }}</td>
                                <td class="border px-4 py-2">{{ $post->body }}</td>
                                <td class="border px-4 py-2">{{ $post->created_at }}</td>
                                <td class="border px-4 py-2">{{ $post->updated_at }}</td>
                                <td class="border px-4 py-2">{{ $post->user->name }}</td>

                                <td class="border px-4 py-2">
                                    <a href="{{ route('posts.edit', $post->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            {{ $posts->links()}}

                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    <a href="{{ route('posts.index') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Create</a>
               </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
