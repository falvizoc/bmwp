
<div class="border-right pt-6" id="sidebar-wrapper">
    <div class="nav nav-docs nav-lavalamp" >
        <a class="nav-item nav-link active show icon-menu " title="Vista extendida" data-toggle="tab" href="#component-1-1"></a>
        <a class="nav-item nav-link icon-grid " title="Vista condensada" data-toggle="tab" href="#component-1-2"></a>
    </div>
    <div class="list-group list-group-minimal">
        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
    </div>
</div>

<!--

<aside class="col-md-3 col-lg-2 card">
    <div class=" widget">
        <div class="d-none d-lg-block" id="vista">
            <hr class=" mb-1 style11 ">
            <div class="nav nav-docs nav-lavalamp" >
                <h6 class="mb-0 text-black-50">Panel</h6>
                <a class="nav-item nav-link active show icon-menu " title="Vista extendida" data-toggle="tab" href="#component-1-1"></a>
                <a class="nav-item nav-link icon-grid " title="Vista condensada" data-toggle="tab" href="#component-1-2"></a>
            </div>
            <hr class=" mb-1 style11">
        </div>
        <h3 class="widget-title">Categorías</h3>
        <div class="list-group list-group-categories list-group-minimal">
            @foreach($subcategorias->subcategorias as $subgategoria)
                <a href=" {{ url("categorias/$subgategoria->id") }}" class="small list-group-item d-flex justify-content-between align-items-center">
                    {{ $subgategoria->nombre }}
                    <span class="badge">{{ $productos->paginas }}</span>
                </a>
            @endforeach
        </div>
        <hr class="mb-1 style11">
        <h3 class="widget-title">Marcas</h3>
        <div class="list-group list-group-categories list-group-minimal">

        </div>
    </div>
</aside>
-->
