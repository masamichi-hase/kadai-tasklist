<!DOCTYPE html>
<html>
<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Taskslist</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     @if (Auth::check())
                        {!! link_to_route('users.index', 'Users') !!}
                    <li>{!! link_to_route('tasks.create', '新規メッセージの投稿') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>