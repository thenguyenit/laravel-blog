<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p>Copyright &copy; {{config('app.name')}} {{date('Y')}}</p>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollToTop"></a>

<!-- jQuery -->
<script src="{{asset('components/jquery/dist/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!--Markdown-->
<script src="{{asset('components/showdown/dist/showdown.min.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/app.js')}}"></script>

@stack('script-footer')

