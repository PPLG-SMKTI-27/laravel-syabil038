<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            Dashboard - Manajemen Project
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- FLASH MESSAGE --}}
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- FORM TAMBAH PROJECT --}}
            <div class="bg-white p-6 rounded shadow">
                <h3 class="font-bold mb-4">Tambah Project</h3>

                <form method="POST" action="{{ route('projects.store') }}" class="space-y-3">
                    @csrf
                    <input type="text" name="judul" placeholder="Judul" class="w-full border p-2 rounded">
                    <textarea name="description" placeholder="Deskripsi" class="w-full border p-2 rounded"></textarea>
                    <input type="text" name="tech_stack" placeholder="Tech (pisahkan koma)" class="w-full border p-2 rounded">
                    <input type="text" name="project_url" placeholder="URL" class="w-full border p-2 rounded">
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        Simpan
                    </button>
                </form>
            </div>

            {{-- DAFTAR PROJECT --}}
            <div class="bg-white p-6 rounded shadow">
                <h3 class="font-bold mb-4">Daftar Project</h3>

                <table class="w-full border">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-2 text-left">Judul</th>
                            <th class="p-2 text-left">Tech</th>
                            <th class="p-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $project)
                            <tr class="border-t">
                                <td class="p-2">{{ $project->judul }}</td>
                                <td class="p-2">
                                    {{ is_array($project->tech_stack) ? implode(', ', $project->tech_stack) : $project->tech_stack }}
                                </td>
                                <td class="p-2 space-x-2">

                                    <a href="{{ route('projects.edit', $project) }}"
                                       class="text-blue-600 hover:underline">
                                        Edit
                                    </a>

                                    <form method="POST"
                                          action="{{ route('projects.destroy', $project) }}"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-red-600 hover:underline">
                                            Hapus
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <a href="{{ url('/') }}"
               class="inline-block px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-900">
                ⬅ Kembali ke Portofolio
            </a>

        </div>
    </div>
</x-app-layout>