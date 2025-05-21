<div id="pagination" hx-swap-oob="true" hx-indicator=".htmx-indicator">
    {{ $rows->links('vendor.pagination.default') }}
    <span class="htmx-indicator" aria-busy="true"></span>
</div>
