<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Project</h1>
        <form action="{{ route('projects.update', $project) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $project->title }}" required>
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ $project->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Project URL</label>
                <input type="url" name="url" class="form-control" value="{{ $project->url }}">
                @error('url') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
                <small>Current: <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" width="100"></small>
                @error('image') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control" required>
                    <option value="draft" {{ $project->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $project->status == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>