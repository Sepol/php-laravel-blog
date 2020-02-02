<div class="container">
    <header class="blog-header py-3" id="menu">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted"></a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">Blog on Laravel</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="btn btn-sm btn-outline-secondary m-1 w-25" href="login">Войти</a>
                <a class="btn btn-sm btn-outline-secondary m-1 w-30" href="register">Регистрация</a>
            </div>
        </div>
    </header>
</div>

<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between float-left">
            <a class="p-2 text-muted" href="/">Главная1</a>
            <a class="p-2 text-muted" href="{{route('admin.article.create')}}">Создать новость</a>
            <a class="p-2 text-muted" href="/admin/article">Список новостей</a>
        </nav>
    </div>
</div>
