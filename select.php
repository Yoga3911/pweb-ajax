<?php
require_once("db.php");

$sql = "SELECT * FROM films";
$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_array($result)) {
    echo '
    <div class="col-md-4 col-xxl-3">
        <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/536/354" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">'. $data["title"] .'</h5>
                <p class="card-text">' . $data["description"] . '</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>';
}
