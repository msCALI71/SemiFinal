<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'User Profiles') - Herd</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* General body and font */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fff;
            color: #111;
            margin: 0;
            padding: 0;
        }
    
        /* Sidebar */
        .sidebar {
            background: #111;
            color: #fff;
            padding: 1rem;
            min-height: 100vh;
        }
    
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 0.4rem 0;
            transition: color 0.2s;
        }
    
        .sidebar a:hover {
            color: #ccc;
        }
    
        /* Main content */
        .content {
            padding: 2rem;
        }
    
        h1, h2, h3, h4, h5 {
            color: #111;
            margin-bottom: 1rem;
        }
    
        /* List group (user rows) */
        .list-group-item {
            background: #fff;
            border: 1px solid #111;
            border-radius: 4px;
            margin-bottom: 0.5rem;
            transition: background 0.2s, color 0.2s;
        }
    
        .list-group-item:hover {
            background: #f4f4f4;
        }
    
        /* Badge */
        .badge {
            font-weight: 500;
        }
    
        .bg-success {
            background: #111 !important;
            color: #fff !important;
        }
    
        .bg-secondary {
            background: #ccc !important;
            color: #111 !important;
        }
    
        /* Buttons */
        .btn {
            background: #111;
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background 0.2s, color 0.2s;
        }
    
        .btn:hover {
            background: #333;
            color: #fff;
        }
    
        /* Card */
        .card {
            border: 1px solid #111;
            border-radius: 6px;
            background: #fff;
            margin-bottom: 1rem;
        }
    
        .card-header, .card-footer {
            border-bottom: 1px solid #111;
            background: #f9f9f9;
            padding: 0.75rem 1rem;
        }
    
        .card-footer {
            border-top: 1px solid #111;
            border-bottom: none;
            text-align: right;
        }
    
        /* Alert component */
        .alert {
            border: 1px solid #111;
            background: #fff;
            color: #111;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            margin-bottom: 1rem;
        }
    
        /* Links inside content */
        a {
            color: #111;
            text-decoration: none;
        }
    
        a:hover {
            color: #555;
            text-decoration: underline;
        }
        /* Sidebar buttons */
.sidebar .nav-link {
    display: block;
    background: #111;       /* black background */
    color: #fff;            /* white text */
    text-align: center;
    padding: 0.6rem 1rem;
    margin-bottom: 0.5rem;
    border-radius: 4px;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
    font-weight: 500;
}

.sidebar .nav-link:hover {
    background: #333;       /* lighter black on hover */
    color: #fff;
}

/* Optional: active state for current page */
.sidebar .nav-link.active {
    background: #555;
    color: #fff;
}

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <aside class="col-md-3 sidebar">
            @section('sidebar')
                <h4>Navigation</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
                </ul>
            @show
        </aside>
        <main class="col-md-9 content">
            <header class="mb-3"><h1>@yield('title')</h1></header>
            @yield('content')
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
