<!DOCTYPE html>
<html>

<head>
    <!-- Other head elements -->

    <title>Add Winter Cricket cup</title>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #593cfa; /* Or any background color you want */
            background-image: url('../images/trainer-bg.jpg'); /* Your background image */
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            color: #e4d4d4;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: transparent;
        }

        form div {
            margin-bottom: 15px;
        }

        form label {
            display: block;
            font-weight: bold;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        form textarea {
            height: 100px;
        }

        form input[type="file"] {
            display: block;
            margin-top: 5px;
        }

        form input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Add Winter Cricket cup title style */
        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 2em;
        }

        /* Back button style */
        .back-button {
            background-color: #445a66;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: block;
            width: fit-content;
            margin: 20px ;
        }

        .back-button:hover {
            background-color: #444;
        }

    </style>
</head>

<body>

    <a href="javascript:history.back()" class="back-button">Go Back</a>

    <h1>Add Winter Cricket cup</h1>

    <div>
        <form action="{{url('add_event')}}" method="POST" enctype="multipart/form-data">
            <!-- Your form content here -->

            @csrf

                    <div>
                        <label>Event Name</label>

                        <input type="text" name="eventname">

                    </div>

                    <div>
                        <label>Organization Name</label>

                        <input type="text" name="organizationname">

                    </div>

                    <div>
                        <label>Description</label>

                        <textarea name="description"></textarea>

                    </div>

                    <div>
                        <label>Image</label>

                        <input type="file" name="image">


                    </div>

                    <div>
                        <input type="submit" class="">
                    </div>

        </form>
    </div>

    <!-- Other content -->

</body>

</html>
