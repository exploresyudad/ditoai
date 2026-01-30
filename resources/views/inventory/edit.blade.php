@extends('layout')

@section('content')
<div class="card">
    <h2>Edit Item</h2>
    <p>Update stock details and reorder levels.</p>

    <form method="POST" action="{{ route('inventory.update', $item) }}">
        @method('PUT')
        @include('inventory._form', ['item' => $item])
    </form>
</div>
@endsection
