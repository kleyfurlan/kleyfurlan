			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
													
                           	<!-- BEGIN:: Agendamentos -->
							<li class="m-menu__item  m-menu__item--submenu profile" aria-haspopup="true" data-menu-submenu-toggle="hover">
								<a href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-list-2"></i>
									<span class="m-menu__link-text">Agendamentos</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<a href="{{url('admin/agendamentos')}}" class="m-menu__link ">
												<span class="m-menu__link-text">Agendamentos</span>
											</a>
										</li>

										<li class="m-menu__item " aria-haspopup="true">
											<a href="{{url('admin/agendamentos')}}" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">Todos Agendamentos</span>
											</a>
										</li>

									</ul>
								</div>
							</li>

							<!-- BEGIN:: Usuarios -->
							<li class="m-menu__item  m-menu__item--submenu profile" aria-haspopup="true" data-menu-submenu-toggle="hover">
								<a href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-users"></i>
									<span class="m-menu__link-text">Usuarios</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<a href="{{url('admin/users')}}" class="m-menu__link ">
												<span class="m-menu__link-text">Usuarios</span>
											</a>
										</li>

										<li class="m-menu__item " aria-haspopup="true">
											<a href="{{url('admin/users')}}" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">Todos Usuarios</span>
											</a>
										</li>

									</ul>
								</div>
							</li>

							<!-- BEGIN:: Serviços -->
							<li class="m-menu__item  m-menu__item--submenu profile" aria-haspopup="true" data-menu-submenu-toggle="hover">
								<a href="#" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-file-1"></i>
									<span class="m-menu__link-text">Serviços</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true">
											<a href="{{url('admin/servicos')}}" class="m-menu__link ">
												<span class="m-menu__link-text">Serviços</span>
											</a>
										</li>

										<li class="m-menu__item " aria-haspopup="true">
											<a href="{{url('admin/servicos')}}" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">Todos Serviços</span>
											</a>
										</li>

										<li class="m-menu__item " aria-haspopup="true">
											<a href="{{url('admin/servicos/create')}}" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">+ Novo Serviço</span>
											</a>
										</li>

									</ul>
								</div>
							</li>

							<!-- BEGIN:: Logout -->
							<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
								<a href="{{url('logout')}}" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-logout"></i>
									<span class="m-menu__link-text">Logout</span>
								</a>
							</li>
							<!-- END:: Logout -->

						</ul>
					</div>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->