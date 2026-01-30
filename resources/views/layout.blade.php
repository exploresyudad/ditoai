<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Inter', sans-serif; margin: 0; background: #f8fafc; color: #0f172a; }
        header { background: #0f172a; color: #fff; padding: 24px; }
        main { max-width: 960px; margin: 0 auto; padding: 32px 24px; }
        .card { background: #fff; border-radius: 12px; padding: 24px; box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08); }
        .toolbar { display: flex; justify-content: space-between; align-items: center; gap: 16px; margin-bottom: 16px; }
        .button { background: #2563eb; color: #fff; border-radius: 8px; padding: 10px 16px; text-decoration: none; display: inline-block; }
        .button.secondary { background: #e2e8f0; color: #0f172a; }
        table { width: 100%; border-collapse: collapse; margin-top: 16px; }
        th, td { text-align: left; padding: 12px; border-bottom: 1px solid #e2e8f0; }
        th { font-size: 12px; text-transform: uppercase; letter-spacing: 0.08em; color: #64748b; }
        .status { margin: 16px 0; padding: 12px 16px; border-radius: 8px; background: #ecfdf3; color: #166534; }
        .form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; }
        label { font-weight: 600; display: block; margin-bottom: 8px; }
        input, textarea { width: 100%; border-radius: 8px; border: 1px solid #cbd5f5; padding: 10px 12px; }
        .actions { display: flex; gap: 8px; }
        .danger { background: #dc2626; }
    </style>
</head>
<body>
<header>
    <h1>Inventory System</h1>
    <p>Track stock levels, pricing, and reorder thresholds.</p>
</header>
<main>
    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif
    @yield('content')
</main>
</body>
</html>
