  <footer class="footer">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                  <p class="mb-0">Copyright 2025 © Epitome Corporation Pvt. Ltd. </p>
              </div>
          </div>
      </div>
  </footer>
  </div>
  </div>

  @if (session('error'))
      <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
          <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header toast-img"><img class="rounded me-2"
                      src="{{ URL::asset('assets/images/icons/error.gif') }}" alt="profile"><strong
                      class="me-auto">Error..!</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body toast-light bg-danger">{{ session('error') }}</div>
          </div>
      </div>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
              let toastLive = document.getElementById("liveToast");
              let toast = new bootstrap.Toast(toastLive);
              toast.show();
          });
      </script>
  @endif

  @if (session('success'))
      <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
          <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header toast-img"><img class="rounded me-2"
                      src="{{ URL::asset('assets/images/icons/success.gif') }}" alt="profile"><strong
                      class="me-auto">Success..!</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body toast-light bg-success">{{ session('success') }}</div>
          </div>
      </div>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
              let toastLive = document.getElementById("liveToast");
              let toast = new bootstrap.Toast(toastLive);
              toast.show();
          });
      </script>
  @endif

  @if (session('warning'))
      <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
          <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header toast-img"><img class="rounded me-2"
                      src="{{ URL::asset('assets/images/icons/warning.gif') }}" alt="profile"><strong
                      class="me-auto">Warning..!</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body toast-dark bg-warning">{{ session('warning') }}</div>
          </div>
      </div>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
              let toastLive = document.getElementById("liveToast");
              let toast = new bootstrap.Toast(toastLive);
              toast.show();
          });
      </script>
  @endif

  @if (session('info'))
      <div class="toast-container position-fixed top-0 end-0 p-3 toast-index toast-rtl">
          <div class="toast hide toast fade" id="liveToast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header toast-img"><img class="rounded me-2"
                      src="{{ URL::asset('assets/images/icons/info.gif') }}" alt="profile"><strong
                      class="me-auto">information..!</strong>
                  <button class="btn-close" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body toast-light bg-info">{{ session('info') }}</div>
          </div>
      </div>
      <script>
          document.addEventListener("DOMContentLoaded", function() {
              let toastLive = document.getElementById("liveToast");
              let toast = new bootstrap.Toast(toastLive);
              toast.show();
          });
      </script>
  @endif
  <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <script src="{{ URL::asset('assets/js/scrollbar/simplebar.js') }}"></script>
  <script src="{{ URL::asset('assets/js/scrollbar/custom.js') }}"></script>
  <script src="{{ URL::asset('assets/js/config.js') }}"></script>
  <script src="{{ URL::asset('assets/js/sidebar-menu.js') }}"></script>
  <script src="{{ URL::asset('assets/js/sidebar-pin.js') }}"></script>
  <script src="{{ URL::asset('assets/js/slick/slick.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/slick/slick.js') }}"></script>
  <script src="{{ URL::asset('assets/js/header-slick.js') }}"></script>

  <script src="{{ URL::asset('assets/js/tooltip-init.js') }}"></script>

  <script src="{{ URL::asset('assets/js/flat-pickr/flatpickr.js') }}"></script>
  <script src="{{ URL::asset('assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
  <script src="{{ URL::asset('assets/js/height-equal.js') }}"></script>

  <script src="{{ URL::asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
  <script src="{{ URL::asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
  <script src="{{ URL::asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
  <script src="{{ URL::asset('assets/js/dropzone/dropzone.js') }}"></script>
  <script src="{{ URL::asset('assets/js/dropzone/dropzone-script.js') }}"></script>
  <script src="{{ URL::asset('assets/js/typeahead/handlebars.js') }}"></script>
  <script src="{{ URL::asset('assets/js/typeahead/typeahead.bundle.js') }}"></script>
  <script src="{{ URL::asset('assets/js/typeahead/typeahead.custom.js') }}"></script>
  <script src="{{ URL::asset('assets/js/typeahead-search/handlebars.js') }}"></script>
  <script src="{{ URL::asset('assets/js/typeahead-search/typeahead-custom.js') }}"></script>
  <script src="{{ URL::asset('assets/js/script.js') }}"></script>

  <script src="{{ URL::asset('assets/js/editors/quill.js') }}"></script>
  <script>
      var editor = new Quill("#editor", {
          modules: {
              toolbar: "#toolbar"
          },
          theme: "snow",
          placeholder: "Enter your messages...",
      });
      document.querySelector("#sliderForm").addEventListener("submit", function() {
          document.querySelector("#description").value = editor.root.innerHTML;
      });
  </script>

  <!-- table -->
  <script src="{{ URL::asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
  <!-- end table -->

  </body>

  </html>
