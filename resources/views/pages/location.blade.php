<!DOCTYPE html>
<html>
<head>
    <title>Province & District</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<h2>Select Location</h2>

<!-- Province Dropdown -->
<select id="province">
    <option value="">Select Province</option>
    @foreach($provinces as $province)
        <option value="{{ $province->id }}">{{ $province->name }}</option>
    @endforeach
</select>

<!-- District Dropdown -->
<select id="district">
    <option value="">Select District</option>
</select>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
   $(document).ready(function() {

    $('#province').on('change', function() {
        var province_id = $(this).val();
        console.log("Province ID:", province_id);

        if(province_id) {
            $.ajax({
               url: "{{ route('get.districts', ':id') }}".replace(':id', province_id),
                type: "GET",
                dataType: "json",
                success: function(data) {
                    console.log("Districts:", data);

                    $('#district').empty();
                    $('#district').append('<option value="">Select District</option>');

                    $.each(data, function(key, value) {
                        $('#district').append('<option value="'+ value.id +'">'+ value.name +'</option>');
                    });
                },
                error: function(error) {
                    console.log("Error:", error);
                }
            });
        } else {
            $('#district').empty();
        }
    });

});
</script>

</body>
</html>