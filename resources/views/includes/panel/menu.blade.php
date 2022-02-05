<a href="{{ url('/') }}" class="logo"></a>

<nav id="inicio">
    <ul>
        <li>
            <a href="{{ url('/') }}" class="{{ request()->route()->named('/*') ? 'activo' : '' }}">Inicio</a>
        </li>
        <li class="services-options">
            <i class="fa fa-caret-square-o-down"></i>
            <a href="#">Servicios</a>
            <ul class="services">
                <li>
                    <a href="#cards-services">Venta</a>
                </li>
                <li>
                    <a href="#cards-services">Renta</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('contacto') }}" class="{{ request()->route()->named('contacto*') ? 'activo' : '' }}">Contacto</a>
        </li>
    </ul>
</nav>