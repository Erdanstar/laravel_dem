<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{route('admin.index')}}">
      <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
    </a>
  </li>
  <li><a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Посты</span></a></li>
  <li class="treeview">
          <a href="#">
            <i class="fas fa-tasks"></i>
            <span>Тест профориентация</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('quiz.index')}}"><i class="fas fa-chart-line"></i> Тесты</a></li>
            <li><a href="{{route('questions.index')}}"><i class="fas fa-chart-line"></i> Вопросы</a></li>
            <li><a href="{{route('options.index')}}"><i class="fas fa-chart-line"></i> Ответы</a></li>
            <li><a href="{{route('corrects.index')}}"><i class="fas fa-chart-line"></i> Метод</a></li>
            <li><a href="#"><i class="fas fa-user-circle"></i> Результаты пользователей</a></li>
          </ul>
        </li>
  <li>
    <a href="{{route('status.index')}}">
      <i class="fas fa-user-graduate"></i> <span>Статус для пользователей</span>
    </a>
  </li>
  <li><a href="#"><i class="fas fa-users"></i> <span>Пользователи</span></a></li>

</ul>
