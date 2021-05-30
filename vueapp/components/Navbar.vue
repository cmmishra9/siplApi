<template>
  <nav
    class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white"
    id="sidenav-main"
  >
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a
          class="navbar-brand"
          href="/"
          data-toggle="tooltip"
          data-original-title="Sipl Training"
        >
          SIPL Training
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div
            class="sidenav-toggler d-none d-xl-block"
            data-action="sidenav-unpin"
            data-target="#sidenav-main"
          >
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link class="nav-link" to="/dashboard">
                <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/settings">
                <i class="ni ni-settings-gear-65 text-primary"></i>
                <span class="nav-link-text">Manage Settings</span>
              </router-link>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#navbar-category"
                data-toggle="collapse"
                role="button"
                aria-expanded="true"
                aria-controls="navbar-category"
              >
                <i class="fas text-primary fa-list-alt"></i>
                <span class="nav-link-text">Manage Category</span>
              </a>
              <div class="collapse" id="navbar-category">
                <ul class="nav nav-sm flex-column">
                 
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      ><span class="sidenav-mini-icon">D </span
                      ><span class="sidenav-normal">All Categories</span></a
                    >
                  </li>
                 
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      ><span class="sidenav-mini-icon">D </span
                      ><span class="sidenav-normal">Add New Category</span></a
                    >
                  </li>
                  @endcan
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#navbar-post"
                data-toggle="collapse"
                role="button"
                aria-expanded="true"
                aria-controls="navbar-post"
              >
                <i class="fas text-primary fa-tasks"></i>
                <span class="nav-link-text">Manage Posts</span>
              </a>
              <div class="collapse" id="navbar-post">
                <ul class="nav nav-sm flex-column">
                  
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      ><span class="sidenav-mini-icon">D </span
                      ><span class="sidenav-normal">All Posts</span></a
                    >
                  </li>
                  
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      ><span class="sidenav-mini-icon">D </span
                      ><span class="sidenav-normal">Add New Post</span></a
                    >
                  </li>
                 
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#navbar-users"
                data-toggle="collapse"
                role="button"
                aria-expanded="true"
                aria-controls="navbar-users"
              >
                <i class="fas text-primary fa-tasks"></i>
                <span class="nav-link-text">Manage Users</span>
              </a>
              <div class="collapse" id="navbar-users">
                <ul class="nav nav-sm flex-column">
                 
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      ><span class="sidenav-mini-icon">D </span
                      ><span class="sidenav-normal">All Users</span></a
                    >
                  </li>
                 
                  <li class="nav-item">
                    <a href="#" class="nav-link"
                      ><span class="sidenav-mini-icon">D </span
                      ><span class="sidenav-normal">Add New User</span></a
                    >
                  </li>
                 
                </ul>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
export default {
  name:'Navbar'
}
</script>