
<div class="content-side content-side-full">
    <ul class="nav-main">
        <i class="nav-main-item">
            <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                <i class="nav-main-link-icon si si-cursor"></i>
                <span class="nav-main-link-name">Dashboard</span>
            </a>
        </i>
        <li class="nav-main-item{{ request()->is('/*') ? ' open' : '' }}">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon si si-bulb"></i>
                <span class="nav-main-link-name">Cadastros</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('clientes/index') ? ' active' : '' }}" href="/clientes/index">
                        <span class="nav-main-link-name">Clientes</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('servicos/index') ? ' active' : '' }}" href="/servicos/index">
                        <span class="nav-main-link-name">Serviços</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('pagamento/index') ? ' active' : '' }}" href="/pagamento/index">
                        <span class="nav-main-link-name">Pagamento</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('produtos/index') ? ' active' : '' }}" href="/produtos/index">
                        <span class="nav-main-link-name">Produtos</span>
                    </a>
                </li>
            
            </ul>
        </li>
        <li class="nav-main-item{{ request()->is('/*') ? ' open' : '' }}">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon si si-bulb"></i>
                <span class="nav-main-link-name">Lançamentos</span>
            </a>

            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('lancamento/index') ? ' active' : '' }}" href="/lancamento/index">
                        <span class="nav-main-link-name">Nova entrada de produto</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-main-item{{ request()->is('/*') ? ' open' : '' }}">
            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                <i class="nav-main-link-icon si si-bulb"></i>
                <span class="nav-main-link-name">Faturamento</span>
            </a>
            <ul class="nav-main-submenu">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('faturamento/index') ? ' active' : '' }}" href="/faturamento/index">
                        <span class="nav-main-link-name">Novo Pedido</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>