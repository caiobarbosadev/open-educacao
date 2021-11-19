<?php
include_once("connection.php");

$videoId = $_POST['videoId'];

$sql = "select * from video where id=" . $videoId;
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
?>
    <form action="../models/updateVideo.php" method="POST">
        <?php echo ('<iframe width="100%" height="260px" src="https://www.youtube.com/embed/' . $row["link"] . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <p><strong>Título:</strong> <?php echo $row['titulo']; ?></p>
            <div style="display: flex; align-items: flex-start; justify-content: center;">
                <p style="margin-right: 5px;"><strong>Código:</strong></p>
                <input style="background-color: #fff !important; border: none !important; padding: 0 !important; cursor: default;" class="form-control mb-3" type="text" placeholder='Digite "Confirmar".' id="videoId" name="videoId" value="<?php echo $videoId ?>" readonly>
            </div>
        </div>

        <p>Para confirmar a liberação de conteúdo, digite "Confirmar" no campo abaixo:</p>
        <input class="form-control mb-3" type="text" placeholder='Digite "Confirmar"' id="confirmar" name="confirmar" required>
        <strong style="display: block;" class="mb-3">Essa ação não poderá ser desfeita.</strong>

        <input value="Aprovar Conteúdo" type="submit" style="background-color: #00e394; border: 0;" class="btn btn-primary">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>

    </form>

<?php } ?>