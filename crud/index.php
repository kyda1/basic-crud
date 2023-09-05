<?php
if (!isset($_SESSION)) {
    session_start();
}
include_once('connection.php');

$sql = "SELECT * FROM users";
$result = mysqli_query($connection, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>crud</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <h1>Information List</h1>
        <div class="form">
            <h2>Add Info</h2>
            <form method="post" action="add.php">
                <input type="text" name="fullname" placeholder="Fullname">
                <input type="date" name="bday" placeholder="Birthdate">
                <input type="text" name="address" placeholder="Address">
                <button type="submit">Add</button>
            </form>
        </div>
        <table>
            <tr>
                <th>Fullname</th>
                <th>Birthday</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>

        <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['fullname'] . "</td>";
                echo "<td>" . $row['bday'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>";
                echo '<button class="edit-btn" onclick="openEditModal(' . $row['id'] . ', \'' . $row['fullname'] . '\', \'' . $row['bday'] . '\', \'' . $row['address'] . '\')">Edit</button>';
                echo '<button class="delete-btn"><a href="delete.php?id=' . $row['id'] . '">Delete</a></button>';
                echo "</td>";
                echo "</tr>";
            }
        ?>


        </table>
    </div>
    <div class="modal-bg" id="editModal">
            <div class="form--update">
            <div class="form">
            <span class="close" id="closeModal">&times;</span>
                <form method="post" action="update.php">
                    <h2>Modify Information</h2>
                    <?php
                        $id = isset($_GET['id']) ? $_GET['id'] : '';
                        $fullname = isset($_GET['fullname']) ? $_GET['fullname'] : '';
                        $bday = isset($_GET['bday']) ? $_GET['bday'] : '';
                        $address = isset($_GET['address']) ? $_GET['address'] : '';
                    ?>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="text" name="fullname" placeholder="Fullname" value="<?php echo $fullname; ?>">
                        <input type="date" name="bday" placeholder="Birthdate" value="<?php echo $bday; ?>">
                        <input type="text" name="address" placeholder="Address" value="<?php echo $address; ?>">
                    <button type="submit">Modify</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
<?php
mysqli_close($connection);
?>

<script>
function openEditModal(id) {
    const editModal = document.getElementById('editModal');
    editModal.style.display = 'block';

}

const closeModalButton = document.getElementById('closeModal');

closeModalButton.addEventListener('click', () => {
    const editModal = document.getElementById('editModal');
    editModal.style.display = 'none';
});

window.addEventListener('click', (event) => {
    const editModal = document.getElementById('editModal');
    if (event.target === editModal) {
        editModal.style.display = 'none';
    }
});

function openEditModal(id, fullname, bday, address) {
    const editModal = document.getElementById('editModal');
    const idInput = editModal.querySelector('input[name="id"]');
    const fullnameInput = editModal.querySelector('input[name="fullname"]');
    const bdayInput = editModal.querySelector('input[name="bday"]');
    const addressInput = editModal.querySelector('input[name="address"]');

    idInput.value = id;
    fullnameInput.value = fullname;
    bdayInput.value = bday;
    addressInput.value = address;

    editModal.style.display = 'block';
}

</script>
