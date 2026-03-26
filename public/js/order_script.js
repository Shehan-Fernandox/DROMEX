<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    
        document.getElementById("first_name").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "First Name is required";
            } else if (value.length < 3) {
                error = "First Name must be at least 3 characters";
            }

            document.getElementById("first_nameError").innerText = error;
        });

        document.getElementById("last_name").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "Last Name is required";
            } else if (value.length < 5) {
                error = "Last Name must be at least 5 characters";
            }

            document.getElementById("last_nameError").innerText = error;
        });

        document.getElementById("email").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "Email is required";
            } else if (!isValidEmail(value)) {
                error = "Please enter a valid email address";
            }

            document.getElementById("emailError").innerText = error;
        });

        document.getElementById("address").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "Address is required";
            } else if (value.length < 10) {
                error = "Address must be at least 10 characters";
            }

            document.getElementById("addressError").innerText = error;
        });

        document.getElementById("zip").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "Zip is required";
            } else if (value.length < 5) {
                error = "Zip must be at least 5 characters";
            }

            document.getElementById("zipError").innerText = error;
        });
    





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




