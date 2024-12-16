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
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
            <form class="d-flex" role="search">
                @csrf
                <i class="bi bi-search icon-search"></i>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
