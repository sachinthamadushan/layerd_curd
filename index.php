<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <?php include 'componet/nav.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 p-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Category</h1>
                        <form id="catForm">
                            <div class="mt-3">
                                <input type="text" id="catName" class="form-control" placeholder="Category" required>
                            </div>
                            <button onclick="addCategory();" class="btn btn-primary mt-3">Add Category</button>
                            <button onclick="updateCategory();" class="btn btn-warning mt-3">Update Category</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 p-3">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Category List</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Category</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>