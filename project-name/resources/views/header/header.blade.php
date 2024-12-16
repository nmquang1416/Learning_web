<style>
    .container{
        width: 1232px;
    }
    nav{
        padding: 0px!important;
    }
    a{
        padding: 0px!important;
    }
    form{
        display: flex;
        align-items: center;
        position: relative;
    }
    i.icon-search{
        position: absolute;
        left: 16px;
    }
    input{
        padding-left: 42px!important;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a href="#" class="navbar-brand">Eroge Learning</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-3 py-4">
                    <a href="#" class="nav-link" aria-current="page">Design</a>
                </li>
                <li class="nav-item px-3 py-4">
                    <a href="#" class="nav-link" >Video</a>
                </li>
                <li class="nav-item px-3 py-4">
                    <a href="#" class="nav-link" >Photo</a>
                </li>
                <li class="nav-item px-3 py-4">
                    <a href="#" class="nav-link" >Web Design</a>
                </li>
                <li class="nav-item px-3 py-4">
                    <a href="#" class="nav-link" >All Coureses</a>
                </li>
            </ul>
            <form action="/" method="post">
                @csrf
                <i class="bi bi-search icon-search"></i>
                <input type="text" class="form-control form-input " placeholder="Search anything...">
            </form>
        </div>
    </div>
</nav>
