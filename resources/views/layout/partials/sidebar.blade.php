
<div class="border-right pt-6 fixed-left " id="sidebar-wrapper">
    <div class="bg-panel">
        <div class="nav nav-docs nav-lavalamp" >
            <a class="nav-item nav-link active show icon-menu " title="Vista extendida" data-toggle="tab" href="#component-1-1"></a>
            <a class="nav-item nav-link icon-grid " title="Vista condensada" data-toggle="tab" href="#component-1-2"></a>
        </div>
        <div class="sidebar-heading">Categorías</div>
        <div class="list-group list-group-minimal">
            @foreach($subcategorias->subcategorias as $subcategoria)
                <a href="{{ url("categorias/$subcategoria->id") }}" class="list-group-item list-group-item-action pl-1 text-gray">
                    {{ $subcategoria->nombre }}
                </a>
            @endforeach
        </div>
    </div>

</div>
