<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('personal.main.index') }}" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p>Main</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.post.index') }}" class="nav-link">
                        <i class="nav-icon far fa-heart"></i>
                        <p>Posts</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('personal.comment.index') }}" class="nav-link">
                        <i class="nav-icon far fa-comment"></i>
                        <p>Comments</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
