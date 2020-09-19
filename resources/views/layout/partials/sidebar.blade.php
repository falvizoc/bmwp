
<div class="border-right pt-6 fixed-left " id="sidebar-wrapper">
    <div class="sidebar sidebar-sticky">
        <div class="sidebar-heading">
            <div class="nav nav-docs nav-lavalamp" >
                <a class="nav-item nav-link active show icon-menu " title="Vista extendida" data-toggle="tab" href="#component-1-1"></a>
                <a class="nav-item nav-link icon-grid " title="Vista condensada" data-toggle="tab" href="#component-1-2"></a>
                <span>Categorías</span>
            </div>
        </div>
        @foreach($subcategorias->subcategorias as $subcategoria)
            <a href="{{ url("categorias/$subcategoria->id") }}" class="nav-link nav-item">
                {{ $subcategoria->nombre }}
            </a>
        @endforeach

    </div>

</div>
