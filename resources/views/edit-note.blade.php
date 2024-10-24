<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .input-title {
            width: 300px;
            max-width: 100%;
        }
        .form-group {
            margin-bottom: 15px; 
        }
    </style>
</head>
<body>

    <input type="checkbox" id="menu-toggle" class="menu-toggle">
        <label for="menu-toggle" class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </label>

        <nav class="drawer">
            <ul>
                <li><a href="{{ route('showAll') }}" class="nav-link">My Notes</a></li>
                <li><a href="{{ route('showBookmarkedNotes') }}" class="nav-link active">Bookmarks</a></li>
                <li><a href="{{ route('showTrash') }}" class="nav-link">Trash Bin</a></li>
            </ul>
        </nav>
    <div class="container">

            <div class="logo">
                <a href="{{ route('showAll') }}">
                    <img src="{{ asset('images/datadump.png') }}" alt="datadump" class="logo-img">
                </a>
            </div>
            
        <h1>Edit Note</h1>
        <form action="{{ route('updateNote', ['id' => $note->id])}}" method="POST"> 
            @method("PUT")
            @csrf 
            <div class="form-group">
                <label for="title">Title</label>
                <input value="{{$note->title}}" type="text" id="title" name="title" required class="input-title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" rows="5" required style="width: 100%;">{{$note->content}}</textarea>
            </div>

            <button type="submit" class="btn">Save</button>

            <div class="button-group">
            <a href="{{ url()->previous() }}" class="btn-back">Back</a>
            </div>
        </form>
    </div>
</body>
</html>
