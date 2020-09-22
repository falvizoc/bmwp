
<div class="border-right pt-6 fixed-left " id="sidebar-wrapper">
    <div class="sidebar sidebar-sticky">
        <div class="sidebar-heading">
            <span>Categorías</span>
        </div>
        @foreach($subcategorias->subcategorias as $subcategoria)
            <a href="{{ url("categorias/$subcategoria->id") }}" class="nav-link nav-item">
                {{ $subcategoria->nombre }}
            </a>
        @endforeach
        <div class="sidebar-heading">
            <span>Marcas</span>
        </div>
    </div>

</div>
