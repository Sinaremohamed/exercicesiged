<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="navbar-menu-wrapper d-flex align-items-center">

    <form class="ml-auto search-form d-none d-md-block" action="#">
      <div class="form-group">
        <input type="search" class="form-control" placeholder="Search Here">
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-bell-outline"></i>
          <span class="count">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
          <a class="dropdown-item py-3">
            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
            <span class="badge badge-pill badge-primary float-right">View all</span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
            </div>
            <div class="preview-item-content flex-grow py-2">
              <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
              <p class="font-weight-light small-text"> The meeting is cancelled </p>
            </div>
          </a>
        </div>
      </li>

      <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <img class="img-xs rounded-circle" src="assets/images/faces/profile.jpg" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
            <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
          </div>
          <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
          <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
          <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
          <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
          <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>


</body>
</html>
