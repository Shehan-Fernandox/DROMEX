<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" class="css">
</head>

<body>
    <form method="POST" action="{{ route('pages.form') }}" class="container mt-5">
        @csrf

        <!-- NAME -->
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}">

            <!-- Laravel error -->
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <!-- Live error -->
            <span id="nameError" style="color:red;"></span>
        </div>

        <!-- ADDRESS -->
        <div class="form-group mb-3">
            <label for="address">Address</label>
            <input
                type="text"
                class="form-control @error('address') is-invalid @enderror"
                id="address"
                name="address"
                value="{{ old('address') }}">

            @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

             <span id="addressError" style="color:red;"></span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script>
        document.getElementById("name").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "Name is required";
            } else if (value.length < 3) {
                error = "Name must be at least 3 characters";
            }

            document.getElementById("nameError").innerText = error;
        });

           document.getElementById("address").addEventListener("input", function() {
            let value = this.value;
            let error = "";

            if (value.trim() === "") {
                error = "Address is required";
            } else if (value.length < 5) {
                error = "Address must be at least 5 characters";
            }

            document.getElementById("addressError").innerText = error;
        });

    </script>


</body>

</html>