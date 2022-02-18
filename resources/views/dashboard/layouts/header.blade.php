<div class="user-action">
    <div class="dropdown notification">
        <button class="dropdown-toggle notification-toggle" type="button" id="notificationButton"
            data-bs-toggle="dropdown">
            <img src="img/notificationBell.svg" alt="">
        </button>

        <ul class="dropdown-menu notificationList" aria-labelledby="notificationButton">
            <li class="dropdown-item notification-item">
                <div class="icon">
                    <ion-icon name="mail"></ion-icon>
                </div>
                <div class="wraperMessage">
                    <p class="label">Selamat Datang {{ auth()->user()->name }}</p>
                    <p class="message">Selamat datang! Kami merasa terhormat untuk menerima Anda.</p>
                </div>
                <p class="time">19.30</p>
            </li>

        </ul>

        <div class="notificationNumber">
            <p class="numberAllNotification">1</p>
        </div>
    </div>
    <div class="logoutAction">
        <form action="/logout" method="post" onsubmit="return confirm('ingin logout')">
            @csrf
            <button type="submit" class="me-1 border-0 bg-transparent d-flex align-item-center">
                <div class="delete-confirm d-flex align-item-center">
                    <span class="mx-1">Logout</span>
                    <img src="img/powerIcon.svg" alt="">
                </div>
            </button>
        </form>
    </div>
</div>


<script>

</script>
