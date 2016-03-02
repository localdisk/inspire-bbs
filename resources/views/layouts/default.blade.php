<!doctype html>
<html lang="ja">
<head>
    <title>@yield('title', 'いんすぱいやーBBS')</title>
</head>
<body>
@yield('content')

@section('footer')
    <hr>
    <footer>
        <address>
            &copy; Copyright 2016 localdisk<br>
            <a href="https://github.com/localdisk/inspire-bbs">InspireBBS Laravel</a> is licenced under <a href="http://www.wtfpl.net/"><abbr title="Do What the Fuck You Want to Public License">WTFPL</abbr></a> and/or <a href="http://www.gnu.org/licenses/agpl-3.0.html"><abbr title="GNU Affero General Public License, Version 3">AGPLv3</abbr></a>
        </address>
    </footer>
@show
</body>
</html>