@csrf
<div class="form-grid">
    <div>
        <label for="sku">SKU</label>
        <input id="sku" name="sku" value="{{ old('sku', $item->sku ?? '') }}" required>
        @error('sku')<p>{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="name">Item Name</label>
        <input id="name" name="name" value="{{ old('name', $item->name ?? '') }}" required>
        @error('name')<p>{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="quantity">Quantity</label>
        <input id="quantity" name="quantity" type="number" min="0" value="{{ old('quantity', $item->quantity ?? 0) }}" required>
        @error('quantity')<p>{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="unit_price">Unit Price (PHP)</label>
        <input id="unit_price" name="unit_price" type="number" step="0.01" min="0" value="{{ old('unit_price', $item->unit_price ?? 0) }}" required>
        @error('unit_price')<p>{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="reorder_level">Reorder Level</label>
        <input id="reorder_level" name="reorder_level" type="number" min="0" value="{{ old('reorder_level', $item->reorder_level ?? '') }}">
        @error('reorder_level')<p>{{ $message }}</p>@enderror
    </div>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="3">{{ old('description', $item->description ?? '') }}</textarea>
        @error('description')<p>{{ $message }}</p>@enderror
    </div>
</div>
<div class="actions" style="margin-top: 16px;">
    <button class="button" type="submit">Save Item</button>
    <a class="button secondary" href="{{ route('inventory.index') }}">Cancel</a>
</div>
