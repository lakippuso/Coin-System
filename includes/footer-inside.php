    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script>
        $(function () {
            $('select[multiple].active.machine').multiselect({
                placeholder: 'Select Machine',
                search: true,
			    maxPlaceholderOpts: 3,
                searchOptions: {
                    'default': 'Search Machine'
                },
                selectAll: true
            });
        });
	</script>

    <link href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" rel="stylesheet" />
    <link href="resources/css/jquery.multiselect.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="resources/js/jquery.multiselect.js"></script>  
    

</body>
</html>