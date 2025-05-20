<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $project->title }}</h1>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/' . $project->image) }}" class="img-fluid rounded" alt="Project Image" style="max-width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <h5 class="card-title">Details</h5>
                        <p><strong>Description:</strong> {{ $project->description ?? 'No description provided' }}</p>
                        <p><strong>URL:</strong> 
                            @if ($project->url)
                                <a href="{{ $project->url }}" target="_blank">{{ $project->url }}</a>
                            @else
                                No URL provided
                            @endif
                        </p>
                        <p><strong>Status:</strong> {{ ucfirst($project->status) }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('projects.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</body>
</html>