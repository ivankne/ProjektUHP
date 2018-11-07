<h1>Employee/s</h1>

<p style="color: red;">Evo ispisa employee:</p>

<?php
if (isset($vars['employees'])) {
    $employees = $vars['employees'];
    ?>
    <table>
        <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                FirstName
            </th>
            <th>
                LastName
            </th>
            <th>
                Email
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($employees as $employee) {
            ?>
            <tr>
                <td>
                    <?php echo $employee->getId(); ?>
                </td>
                <td>
                    <?php echo $employee->getFirstName(); ?>
                </td>
                <td>
                    <?php echo $employee->getLastName(); ?>
                </td>
                <td>
                    <?php echo $employee->getEmail(); ?>
                </td>

                <td>
                    <a href="?employeeId=<?php echo $employee->getId(); ?>">READ</a>
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
} else if (isset($vars['employee'])) {
    $employee = $vars['employee'];
    ?>
    <h3>Single user profile</h3>
    <p>
        Id is: <strong><?php echo $employee->getId(); ?></strong><br>
        FirstName is: <strong><?php echo $employee->getFirstName(); ?></strong><br>
        LastName is: <strong><?php echo $employee->getLastName(); ?></strong><br>
        Email is: <strong><?php echo $employee->getEmail(); ?></strong><br>
    </p>
<?php
}