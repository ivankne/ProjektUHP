<h1>Document/s</h1>

<p style="color: red;">Evo ispisa document:</p>

<?php
if (isset($vars['documents'])) {
    $documents = $vars['documents'];
    ?>
    <table>
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Path
            </th>
            <th>
                Description
            </th>
            <th>
                Project_id?
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($documents as $document) {
            ?>
            <tr>
                <td>
                    <?php echo $document->getId(); ?>
                </td>
                <td>
                    <?php echo $document->getPath(); ?>
                </td>
                <td>
                    <?php echo $document->getDescription(); ?>
                </td>
                <td>
<!--                    Neznam prikazati project id-->
                    Neznam prikazati project id
                </td>
                <td>
                    <a href="?documentId=<?php echo $document->getId(); ?>">READ</a>
                    <a href="#">UPDATE</a>
                    <a href="#">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <?php
} else if (isset($vars['document'])) {
    $document = $vars['document'];
    ?>
    <h3>Single document view</h3>
    <p>
        Id is: <strong><?php echo $document->getId(); ?></strong><br>
        Path is: <strong><?php echo $document->getPath(); ?></strong><br>
        Desc is: <strong><?php echo $document->getDescription(); ?></strong><br>
    </p>
<?php
}