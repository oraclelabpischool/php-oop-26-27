<?php require "tamplate/header.php" ?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header text-center font-bold">
                List Author PPLG Library
            </div>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <a 
                    href="/author/create"
                    class="m-2 btn btn-dark">Add Author</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require "tamplate/footer.php" ?>
