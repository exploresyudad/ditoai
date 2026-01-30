@extends('layout')

@section('content')
<div class="card">
    <h2>Add New Item</h2>
    <p>Fill in the details to add stock to your inventory.</p>

    <form method="POST" action="{{ route('inventory.store') }}">
        @include('inventory._form')
    </form>
</div>
@endsection
