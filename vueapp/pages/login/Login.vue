<template>
  <div>
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg
          x="0"
          y="0"
          viewBox="0 0 2560 100"
          preserveAspectRatio="none"
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
        >
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="container mt--9 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary border border-soft">
            <div class="card-header px-lg-5 bg-transparent">
              <h3 class="text-muted text-center my-2">Sign In</h3>
            </div>
            <div class="card-body px-lg-5 py-lg-5 pt-2">
              <form method="POST" action="#">
                <div class="form-group">
                  <div
                    class="input-group input-group-merge input-group-alternative mb-3"
                  >
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="ni ni-email-83"></i
                      ></span>
                    </div>
                    <input
                      id="email"
                      type="email"
                      value="admin@email.com"
                      class="form-control is-invalid @enderror"
                      name="email"
                      required
                      autocomplete="email"
                      autofocus
                    />

                    <span class="invalid-feedback" role="alert">
                      <strong>fsdfsdf</strong>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <div
                    class="input-group input-group-merge input-group-alternative"
                  >
                    <div class="input-group-prepend">
                      <span class="input-group-text"
                        ><i class="ni ni-lock-circle-open"></i
                      ></span>
                    </div>
                    <input
                      id="password"
                      type="password"
                      value="secret"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password"
                      required
                      autocomplete="current-password"
                    />

                    <span class="invalid-feedback" role="alert">
                      <strong>sdfsdfa</strong>
                    </span>
                  </div>
                </div>
                <div
                  class="custom-control custom-control-alternative custom-checkbox"
                >
                  <input
                    class="custom-control-input"
                    id=" customCheckLogin"
                    name="remember"
                    type="checkbox"
                  />
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span>Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary mt-4">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name:'Login'
}
</script>