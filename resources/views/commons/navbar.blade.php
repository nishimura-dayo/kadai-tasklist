<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/">TaskList</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>

            {{-- <ul class="navbar-nav"> --}}
            {{--     {{-- タスク作成ページへのリンク --}}
            {{-- <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクを作成する', [], ['class' => 'nav-link']) !!}</li> --}}
            {{-- </ul> --}}

            <ul class="navbqar-nav">
                {{-- ユーザ登録ページへのリンク --}}
                <li class="nav-item"><a href="#" class="nav-link">ユーザ登録</a></li>
                {{-- ログインページへのリンク --}}
                <li class="nav-item"><a href="#" class="nav-link">ログイン</a></li>
            </ul>
        </div>
    </nav>
</header>