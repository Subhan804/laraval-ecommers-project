<div class="card product-card w-100 shadow-sm border-0 rounded-4 overflow-hidden"
    onclick="window.location='{{ route('catalog.product.show', $product->id) }}'"
    style="cursor: pointer; transition: transform 0.2s ease-in-out;"
    onmouseover="this.style.transform='scale(1.02)'"
    onmouseout="this.style.transform='scale(1)'">

    @if ($product->image)
    <img src="{{ asset('storage/' . $product->image) }}"
        class="card-img-top object-fit-cover"
        alt="{{ $product->name }}"
        style="height: 220px; width: 100%; object-fit: cover;">
    @endif

    <div class="card-body d-flex flex-column justify-content-between p-3">
        <div>
            <h5 class="card-title fw-semibold text-dark mb-2">{{ $product->name }}</h5>
            <p class="card-text text-muted small">
                {{ \Illuminate\Support\Str::limit($product->description, 70, '...') }}
            </p>
        </div>

        <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="text-primary fw-bold fs-5">${{ number_format($product->price, 2) }}</span>

            <form action="{{ route('cart.add', $product->id) }}"
                method="POST"
                onclick="event.stopPropagation();">
                @csrf
                <button type="submit" class="btn btn-outline-success btn-sm px-3">
                    <i class="bi bi-cart-plus me-1"></i> Add
                </button>
            </form>
        </div>
    </div>
</div>