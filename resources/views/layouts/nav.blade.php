<header class="main-header d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-2 d-flex align-items-center">
                <a href="/{{ app()->getLocale() }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo" /></a>
            </div>
            <div class="col-md-6">
                <ul class="main-nav d-flex align-items-center">
                    <li><a href="/{{ app()->getLocale() }}/quiz">{{ __('home.proforientation') }}</a></li>
                    <li><a href="/{{ app()->getLocale() }}/indev">{{ __('home.jobs') }}</a></li>
                    <li><a href="/{{ app()->getLocale() }}/professions">{{ __('home.specalties') }}</a></li>
                    <li><a href="/{{ app()->getLocale() }}/educations">{{ __('home.educations') }}</a></li>
                </ul>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <ul class="right-nav d-flex align-items-center">
                    <li class="dropdown">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="modal" data-target="#exampleModalCenter">
                            <img src="{{ asset('img/location-icon.png') }}" alt="Ваш город" />Ваш город
                        </a>

                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Выберите город</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      @foreach ($countries as $country)
                                        <a href="/{{ app()->getLocale() }}/indev" class="nav-link">{{$country->region}}</a>
                                      @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="/{{ app()->getLocale() }}/login"><img src="{{ asset('img/user-icon.png') }}" alt="User" /></a></li>
                </ul>
						</div>
            <div class="col-md-1">
                <div class="lang text-right d-flex flex-column">
										<div class="dropdown">
											<a href="#" class="dropdown-toggle" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('home.langTitle') }}</a>
											<div class="dropdown-menu" aria-labelledby="langDropdown">
												@foreach($lgs as $lang)
													@if($curl == null)
													<a class="dropdown-item {{ app()->getLocale() == $lang->code ? 'disabled' : ''}}" href="/{{ $lang->code }}">{{ $lang->title }}</a>
													@else
													<a class="dropdown-item {{ app()->getLocale() == $lang->code ? 'disabled' : ''}}" href="/{{ $lang->code }}/{{ $curl }}">{{ $lang->title }}</a>
													@endif
												@endforeach
											</div>
										</div>
                </div>
            </div>
        </div>
    </div>
</header>
