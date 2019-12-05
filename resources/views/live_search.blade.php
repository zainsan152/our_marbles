<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}"/>
    <title>Our Marbles</title>
    @include('partials.css')
</head>
<body>
@include('partials.topbar')
<br />
<div class="container box">
    <h3 align="center">Search Products</h3><br />
    <div class="panel panel-default">
        <div class="panel-heading">Search Products by Name OR Price</div>
        <div class="panel-body">
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search Products" />
            </div>
            <div class="table-responsive">
                <h3 align="center">Total Products : <span id="total_records"></span></h3>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('partials.footer')
@include('partials.js')
</body>
</html>

<script>
    $(document).ready(function(){

        fetch_product_data();

        function fetch_product_data(query = '')
        {
            $.ajax({
                url:"{{ route('live_search.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('tbody').html(data.table_data);
                    $('#total_records').text(data.total_data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_product_data(query);
        });
    });
</script>
