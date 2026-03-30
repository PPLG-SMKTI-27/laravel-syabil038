<x-app-layout>
    <div class="p-6">

        <h2 class="text-2xl font-bold mb-4">Manajemen Project</h2>

        @if(session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <!-- FORM TAMBAH -->
        <form method="POST" action="{{ route('projects.store') }}" class="mb-6 space-y-3">
            @csrf
            <input type="text" name="title" placeholder="Judul" class="w-full border p-2">
            <textarea name="description" placeholder="Deskripsi" class="w-full border p-2"></textarea>
            <input type="text" name="tech_stack" placeholder="Tech Stack (pisahkan koma)" class="w-full border p-2">
            <input type="text" name="project_url" placeholder="URL Project" class="w-full border p-2">
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Tambah</button>
        </form>

        <!-- DAFTAR PROJECT -->
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2">Title</th>
                    <th class="p-2">Tech</th>
                    <th class="p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr class="border-t">
                        <td class="p-2">{{ $project->title }}</td>
                        <td class="p-2">
                            {{ implode(', ', $project->tech_stack ?? []) }}
                        </td>
                        <td class="p-2 space-x-2">
                            <a href="{{ route('projects.edit', $project) }}" class="text-blue-600">Edit</a>

                            <form method="POST" action="{{ route('projects.destroy', $project) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>