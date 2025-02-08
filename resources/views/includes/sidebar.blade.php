<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">

			<ul>
				<li class="menu-title">
					<span>Menu</span>
				</li>
				<li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
					<a href="{{route('dashboard')}}"><i class="fe fe-home"></i> <span>Accueil</span></a>
				</li>

				@can('view-category')
				<li class="{{ Request::routeIs('categories') ? 'active' : '' }}">
					<a href="{{route('categories')}}"><i class="fe fe-layout"></i> <span>Catégories</span></a>
				</li>
				@endcan

				@can('view-products')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Produits</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						@can('view-products')<li><a class="{{ Request::routeIs(('products')) ? 'active' : '' }}" href="{{route('products')}}">Produits</a></li>@endcan
						@can('create-product')<li><a class="{{ Request::routeIs('add-product') ? 'active' : '' }}" href="{{route('add-product')}}">Add Product</a></li>@endcan
						@can('view-outstock-products')<li><a class="{{ Request::routeIs('outstock') ? 'active' : '' }}" href="{{route('outstock')}}">Out-Stock</a></li>@endcan
						@can('view-expired-products')<li><a class="{{ Request::routeIs('expired') ? 'active' : '' }}" href="{{route('expired')}}">Expired</a></li>@endcan
					</ul>
				</li>
				@endcan

				@can('view-purchase')
				<li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span> Achat </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('purchases') ? 'active' : '' }}" href="{{route('purchases')}}">Achat</a></li>
						@can('create-purchase')
						<li><a class="{{ Request::routeIs('add-purchase') ? 'active' : '' }}" href="{{route('add-purchase')}}">Ajouter Achat</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('view-sales')
				<li><a class="{{ Request::routeIs('sales') ? 'active' : '' }}" href="{{route('sales')}}"><i class="fe fe-activity"></i> <span>Ventes</span></a></li>
				@endcan
				@can('view-supplier')
				<li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span> Fournisseur</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('suppliers') ? 'active' : '' }}" href="{{route('suppliers')}}">Fournisseur</a></li>
						@can('create-supplier')<li><a class="{{ Request::routeIs('add-supplier') ? 'active' : '' }}" href="{{route('add-supplier')}}">Ajouter un Fournisseur</a></li>@endcan
					</ul>
				</li>
				@endcan

				@can('view-reports')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Rapports </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('reports') ? 'active' : '' }}" href="{{route('reports')}}">Rapports</a></li>
					</ul>
				</li>
				@endcan

				@can('view-access-control')
				<li class="submenu">
					<a href="#"><i class="fe fe-lock"></i> <span> Control d'accès</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						@can('view-permission')
						<li><a class="{{ Request::routeIs('permissions') ? 'active' : '' }}" href="{{route('permissions')}}">Permissions</a></li>
						@endcan
						@can('view-role')
						<li><a class="{{ Request::routeIs('roles') ? 'active' : '' }}" href="{{route('roles')}}">Roles</a></li>
						@endcan
					</ul>
				</li>
				@endcan

				@can('view-users')
				<li class="{{ Request::routeIs('users') ? 'active' : '' }}">
					<a href="{{route('users')}}"><i class="fe fe-users"></i> <span>Utilisateurs</span></a>
				</li>
				@endcan

				<li class="{{ Request::routeIs('profile') ? 'active' : '' }}">
					<a href="{{route('profile')}}"><i class="fe fe-user-plus"></i> <span>Profil</span></a>
				</li>
				@can('view-settings')
				<li class="{{ Request::routeIs('settings') ? 'active' : '' }}">
					<a href="{{route('settings')}}">
						<i class="fa fa-gears"></i>
						 <span> Paramètres </span>
					</a>
				</li>
				@endcan
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->
