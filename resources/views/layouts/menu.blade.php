<li class="nav-item {{ Request::is('statusPeople*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('statusPeople.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Status  People</span>
    </a>
</li>
<li class="nav-item {{ Request::is('identificationTypes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('identificationTypes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Identification Types</span>
    </a>
</li>
<li class="nav-item {{ Request::is('typePeople*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('typePeople.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Type People</span>
    </a>
</li>
<li class="nav-item {{ Request::is('brands*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('brands.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Brands</span>
    </a>
</li>
<li class="nav-item {{ Request::is('servicesStatuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('servicesStatuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Services  Statuses</span>
    </a>
</li>
<li class="nav-item {{ Request::is('typeServices*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('typeServices.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Type Services</span>
    </a>
</li>
<li class="nav-item {{ Request::is('invoiceStatuses*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('invoiceStatuses.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Invoice  Statuses</span>
    </a>
</li>
<li class="nav-item {{ Request::is('people*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('people.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>People</span>
    </a>
</li>
<li class="nav-item {{ Request::is('cars*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('cars.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Cars</span>
    </a>
</li>
<li class="nav-item {{ Request::is('facturas*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('facturas.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Facturas</span>
    </a>
</li>
<li class="nav-item {{ Request::is('services*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('services.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Services</span>
    </a>
</li>
