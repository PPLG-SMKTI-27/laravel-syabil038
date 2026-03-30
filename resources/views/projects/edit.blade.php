<x-app-layout>
    <div class="p-6">

        <h2 class="text-2xl font-bold mb-4">Edit Project</h2>

        <form method="POST" action="{{ route('projects.update', $project) }}" class="space-y-3">
            @csrf
            @method('PUT')

            <input type="text" name="judul" value="{{ $project->judul }}" class="w-full border p-2">
            <textarea name="description" class="w-full border p-2">{{ $project->description }}</textarea>
            <input type="text" name="tech_stack" value="{{ $techStackInput }}" class="w-full border p-2">
            <input type="text" name="project_url" value="{{ $project->project_url }}" class="w-full border p-2">

            <button class="bg-green-600 text-white px-4 py-2 rounded">Update</button>
        </form>

    </div>
</x-app-layout>