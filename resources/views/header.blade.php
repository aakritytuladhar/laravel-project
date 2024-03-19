<?php 
  use App\Http\Controllers\ProductController;
  $total=0;
if(Session::has('user'))
{
    $total= ProductController::cartItem();
}
?>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/home"><img src="../image/refinedlogo1.gif" class="logo-img" alt="Koseli"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/aboutus">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/myorders">Order</a>
            </li>
          </ul>
          <form action="/search" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
            <ul class="nav-item navbar-nav navbar-right">
              <li class="pl-3 cart">
                <a href="/cartlist">
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 74 74" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="M65,72H9a3,3,0,0,1-3-3V30a1,1,0,0,1,2,0V69a1,1,0,0,0,1,1H65a1,1,0,0,0,1-1V30a1,1,0,0,1,2,0V69A3,3,0,0,1,65,72Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M70,31H52.31a1,1,0,0,1,0-2H70V19H4V29H21.69a1,1,0,1,1,0,2H4a2,2,0,0,1-2-2V19a2,2,0,0,1,2-2H70a2,2,0,0,1,2,2V29A2,2,0,0,1,70,31Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M37,19a1,1,0,0,1-.86-1.509c2.193-3.712,7.618-12.538,10.615-14.326a8.2,8.2,0,1,1,8.4,14.078c-1.222.73-3.7,1.319-7.369,1.75a1,1,0,1,1-.233-1.986c4.439-.522,6.025-1.151,6.576-1.48A6.179,6.179,0,0,0,56.971,11.7a6.194,6.194,0,0,0-9.191-6.818c-2.126,1.269-6.517,7.871-9.918,13.626A1,1,0,0,1,37,19Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M37,19a1,1,0,0,1-.862-.491c-3.4-5.756-7.792-12.358-9.917-13.626a6.2,6.2,0,1,0-6.347,10.644c.55.329,2.136.958,6.576,1.48a1,1,0,1,1-.233,1.986c-3.667-.431-6.147-1.02-7.369-1.75a8.2,8.2,0,1,1,8.4-14.078c3,1.788,8.42,10.614,10.614,14.326A1,1,0,0,1,37,19Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M42,72H32a1,1,0,0,1-1-1V29.12a1,1,0,0,1,2,0V70h8V29.12a1,1,0,0,1,2,0V71A1,1,0,0,1,42,72Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M41.94,30H32.06a1,1,0,1,1,0-2h9.88a1,1,0,0,1,0,2Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M46.692,40.563a1,1,0,0,1-.912-.59L36.088,18.41a1,1,0,0,1,1.824-.82l8.613,19.162,1.29-4.114a1,1,0,0,1,1.365-.613l3.77,1.7-7.163-15.3a1,1,0,1,1,1.812-.848L55.906,35.32a1,1,0,0,1-1.316,1.335l-5.2-2.344-1.74,5.55a1,1,0,0,1-.895.7Z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="M27.308,40.563l-.06,0a1,1,0,0,1-.895-.7l-1.74-5.55-5.2,2.344a1,1,0,0,1-1.316-1.335L26.4,17.576a1,1,0,1,1,1.812.848l-7.163,15.3,3.77-1.7a1,1,0,0,1,1.365.613l1.29,4.114L36.088,17.59a1,1,0,0,1,1.824.82L28.22,39.973A1,1,0,0,1,27.308,40.563Z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                  <sup>{{$total}}</sup>
                </a>
              </li>
              @if(Session::has('user'))
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Session::get('user')['name']}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </li>
                @else
                <li class="pl-3"><a href="/login">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m32 0c-17.645 0-32 14.356-32 32s14.355 32 32 32c17.644 0 32-14.355 32-32s-14.356-32-32-32zm0 4c15.439 0 28 12.56 28 28 0 5.603-1.66 10.821-4.505 15.203-1.455-7.074-6.058-13.197-12.523-16.533 1.889-2.388 3.028-5.396 3.028-8.67 0-7.72-6.28-14-14-14s-14 6.28-14 14c0 3.274 1.139 6.282 3.028 8.67-6.466 3.336-11.068 9.459-12.523 16.533-2.845-4.382-4.505-9.6-4.505-15.203 0-15.44 12.56-28 28-28zm-10 18c0-5.514 4.486-10 10-10s10 4.486 10 10-4.486 10-10 10-10-4.486-10-10zm10 38c-7.82 0-14.898-3.227-19.983-8.414.164-7.855 4.965-14.918 12.158-17.982 2.235 1.512 4.928 2.396 7.825 2.396 2.896 0 5.59-.884 7.825-2.396 7.193 3.064 11.994 10.127 12.158 17.982-5.085 5.187-12.163 8.414-19.983 8.414z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                </a></li>
                <li class="pl-3">
                  <a href="/register">
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="30" height="30" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path xmlns="http://www.w3.org/2000/svg" d="m11.894 24c-.131 0-.259-.052-.354-.146-.118-.118-.17-.288-.137-.451l.707-3.535c.02-.098.066-.187.137-.256l7.778-7.778c.584-.584 1.537-.584 2.121 0l1.414 1.414c.585.585.585 1.536 0 2.121l-7.778 7.778c-.069.07-.158.117-.256.137l-3.535.707c-.032.006-.065.009-.097.009zm1.168-3.789-.53 2.651 2.651-.53 7.671-7.671c.195-.195.195-.512 0-.707l-1.414-1.414c-.195-.195-.512-.195-.707 0zm2.367 2.582h.01z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m9.5 21h-7c-1.379 0-2.5-1.121-2.5-2.5v-13c0-1.379 1.121-2.5 2.5-2.5h2c.276 0 .5.224.5.5s-.224.5-.5.5h-2c-.827 0-1.5.673-1.5 1.5v13c0 .827.673 1.5 1.5 1.5h7c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m16.5 12c-.276 0-.5-.224-.5-.5v-6c0-.827-.673-1.5-1.5-1.5h-2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h2c1.379 0 2.5 1.121 2.5 2.5v6c0 .276-.224.5-.5.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m11.5 6h-6c-.827 0-1.5-.673-1.5-1.5v-2c0-.276.224-.5.5-.5h1.55c.232-1.14 1.243-2 2.45-2s2.218.86 2.45 2h1.55c.276 0 .5.224.5.5v2c0 .827-.673 1.5-1.5 1.5zm-6.5-3v1.5c0 .275.225.5.5.5h6c.275 0 .5-.225.5-.5v-1.5h-1.5c-.276 0-.5-.224-.5-.5 0-.827-.673-1.5-1.5-1.5s-1.5.673-1.5 1.5c0 .276-.224.5-.5.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m13.5 9h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m13.5 12h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#000000" data-original="#000000" class=""></path><path xmlns="http://www.w3.org/2000/svg" d="m13.5 15h-10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h10c.276 0 .5.224.5.5s-.224.5-.5.5z" fill="#000000" data-original="#000000" class=""></path></g></svg>
                </a>
              </li>
                @endif
        </ul>
        </div>
      </nav>
</header>