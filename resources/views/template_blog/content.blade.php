    <!-- SECTION -->
    @include('template_blog.head')

	<div class="section">
		<!-- container -->
		<div class="container">
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
          @yield('isi')
          </div>
          @include('template_blog.widget')
  </div>
</div>  

@include('template_blog.footer')