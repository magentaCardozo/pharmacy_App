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

				@can('voir-categorie')
				<li class="{{ Request::routeIs('categories') ? 'active' : '' }}">
					<a href="{{route('categories')}}"><i class="fe fe-layout"></i> <span>Catégories</span></a>
				</li>
				@endcan

				@can('voir-produits')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Produits</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						@can('voir-produits')<li><a class="{{ Request::routeIs(('products')) ? 'active' : '' }}" href="{{route('products')}}">Produits</a></li>@endcan
						@can('creer-produits')<li><a class="{{ Request::routeIs('add-product') ? 'active' : '' }}" href="{{route('add-product')}}">Ajouter Produit</a></li>@endcan
						@can('voir-produits-enRuptureStock')<li><a class="{{ Request::routeIs('outstock') ? 'active' : '' }}" href="{{route('outstock')}}">Rupture de Stock</a></li>@endcan
						@can('voir-produits-expire')<li><a class="{{ Request::routeIs('expired') ? 'active' : '' }}" href="{{route('expired')}}">Expiré</a></li>@endcan
					</ul>
				</li>
				@endcan

				@can('voir-achats')
				<li class="submenu">
					<a href="#"><i class="fe fe-star-o"></i> <span> Achat </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('purchases') ? 'active' : '' }}" href="{{route('purchases')}}">Achat</a></li>
						@can('creer-achats')
						<li><a class="{{ Request::routeIs('add-purchase') ? 'active' : '' }}" href="{{route('add-purchase')}}">Ajouter Achat</a></li>
						@endcan
					</ul>
				</li>
				@endcan
				@can('voir-ventes')
				<li><a class="{{ Request::routeIs('sales') ? 'active' : '' }}" href="{{route('sales')}}"><i class="fe fe-activity"></i> <span>Ventes</span></a></li>
				@endcan
				@can('voir-fournisseur')
				<li class="submenu">
					<a href="#"><i class="fe fe-user"></i> <span> Fournisseur</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('suppliers') ? 'active' : '' }}" href="{{route('suppliers')}}">Fournisseur</a></li>
						@can('creer-fournisseur')<li><a class="{{ Request::routeIs('add-supplier') ? 'active' : '' }}" href="{{route('add-supplier')}}">Ajouter un Fournisseur</a></li>@endcan
					</ul>
				</li>
				@endcan

				@can('voir-raports')
				<li class="submenu">
					<a href="#"><i class="fe fe-document"></i> <span> Rapports </span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						<li><a class="{{ Request::routeIs('reports') ? 'active' : '' }}" href="{{route('reports')}}">Rapports</a></li>
					</ul>
				</li>
				@endcan

				@can('voir-acces-controle')
				<li class="submenu">
					<a href="#"><i class="fe fe-lock"></i> <span> Control d'accès</span> <span class="menu-arrow"></span></a>
					<ul style="display: none;">
						@can('voir-permission')
						<li><a class="{{ Request::routeIs('permissions') ? 'active' : '' }}" href="{{route('permissions')}}">Permissions</a></li>
						@endcan
						@can('voir-role')
						<li><a class="{{ Request::routeIs('roles') ? 'active' : '' }}" href="{{route('roles')}}">Rôles</a></li>
						@endcan
					</ul>
				</li>
				@endcan

				@can('voir-utilisateur')
				<li class="{{ Request::routeIs('users') ? 'active' : '' }}">
					<a href="{{route('users')}}"><i class="fe fe-users"></i> <span>Utilisateurs</span></a>
				</li>
				@endcan

				<li class="{{ Request::routeIs('profile') ? 'active' : '' }}">
					<a href="{{route('profile')}}"><i class="fe fe-user-plus"></i> <span>Profil</span></a>
				</li>
				@can('voir-parametres')
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
