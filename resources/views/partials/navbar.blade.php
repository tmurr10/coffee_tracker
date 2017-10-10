<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <select id="user_dropdown">
                        <option {{ $id == 0 ? 'selected' : ''}} value="0">Select a user</option>
                        @foreach ($data['users'] as $user)
                            <option {{ $id == $user->id ? 'selected' : ''}} value="{{$user->id}}">{{$user->username}}</option>
                        @endforeach
                    </select>
                </li>
                <li><div class="nav-button" id="profile_button">Profile</div></li>
                <li><div class="nav-button" id="coffee_button">Coffee</div></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container -->
</nav>