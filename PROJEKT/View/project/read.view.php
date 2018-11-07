<h1>Project/s</h1>

<p style="color: red;">Evo ispisa projecta:</p>

<?php
if (isset($vars['projects'])) {
    $projects = $vars['projects'];
    ?>
    <table>
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Start date
            </th>
            <th>
                end Date
            </th>
            <th>
                Description
            </th>
            <th>
                Budget
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($projects as $project) {
            ?>
            <tr>
                <td>
                    <?php echo $project->getId(); ?>
                </td>
                <td>
                    <?php echo $project->getName(); ?>
                </td>
                <td>
                    <?php echo $project->getStartDate(); ?>
                </td>
                <td>
                    <?php echo $project->getEndDate(); ?>
                </td>
                <td>
                    <?php echo $project->getDescription(); ?>
                </td>
                <td>
                    <?php echo $project->getBudget(); ?>
                </td>
                <td>
                    <a href="?projectId=<?php echo $project->getId(); ?>">READ</a>
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
} else if (isset($vars['project'])) {
    $project = $vars['project'];
    ?>
    <h3>Single user profile</h3>
    <p>
        Id is: <strong><?php echo $project->getId(); ?></strong><br>
        Name is: <strong><?php echo $project->getName(); ?></strong><br>
        Start date is: <strong><?php echo $project->getStartDate(); ?></strong><br>
        End date is: <strong><?php echo $project->getEndDate(); ?></strong><br>
        Description is: <strong><?php echo $project->getDescription(); ?></strong><br>
        Budget is: <strong><?php echo $project->getBudget(); ?></strong><br>
    </p>
<?php
}