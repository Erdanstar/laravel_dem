<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{route('admin.index')}}">
      <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
    </a>
  </li>
  <li><a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
  <li class="treeview">
          <a href="{{ route('tests.index')}}">
            <i class="fas fa-tasks"></i>
            <span>Тест профориентация</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('tests.index')}}"><i class="fas fa-chart-line"></i> Информация</a></li>
            <li><a href="{{route('answers.index')}}"><i class="fas fa-exclamation-circle"></i> Ответы</a></li>
            <li><a href="{{route('orentation.index')}}"><i class="fas fa-question-circle"></i> Ориентация</a></li>
            <li><a href="../charts/flot.html"><i class="fas fa-user-circle"></i> Результаты пользователей</a></li>
            <li><a href="{{route('next.index')}}"><i class="fas fa-cog"></i> Метод для теста</a></li>
          </ul>
        </li>
  <li>
    <a href="#">
      <i class="fas fa-comments"></i> <span>Комментарии</span>
      <span class="pull-right-container">
        <small class="label pull-right bg-green">5</small>
      </span>
    </a>
  </li>
  <li><a href="#"><i class="fas fa-users"></i> <span>Пользователи</span></a></li>

</ul>
