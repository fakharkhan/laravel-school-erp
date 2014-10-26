<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ Config::get('view.bootstrap') }}/js/bootstrap.min.js"></script>
<script src="/assets/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/assets/js/ie10-viewport-bug-workaround.js"></script>

<!--dataTables-->
<script src="/assets/dataTables/js/jquery.dataTables.js"></script>

<script type="text/javascript" language="javascript" src="/assets/dataTables/js/dataTables.bootstrap.js"></script>

<script>
    function closeAlert() {
        var alert = $('.alert').alert();
        window.setTimeout(function() { alert.alert('close') }, 4000);
    }
    closeAlert();
</script>

@yield('page-level-javascript')