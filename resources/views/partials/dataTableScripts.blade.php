<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script type="application/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
<script type="application/javascript">
        $(document).ready(function() {
            $.noConflict();
            $('#tableSearch').DataTable({
                "order": [],
                pageLength: 10,
                filter: true,
                deferRender: true,
                scrollY: 200,
                scrollCollapse: true,
                scroller: true,
                "searching": true,
            });
        });
</script>
