<h1>User/s</h1>

<p style="color: red;">Evo ispisa:</p>

<?php
if (isset($vars['users'])) {
    $users = $vars['users'];
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
                Username
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($users as $user) {
            ?>
            <tr>
                <td>
                    <?php echo $user->getId(); ?>
                </td>
                <td>
                    <?php echo $user->getFirstName(); ?>
                </td>
                <td>
                    <?php echo $user->getLastName(); ?>
                </td>
                <td>
                    <?php echo $user->getEmail(); ?>
                </td>
                <td>
                    <?php echo $user->getUsername(); ?>
                </td>
                <td>
                    <a href="?userId=<?php echo $user->getId(); ?>">READ</a>
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
} else if (isset($vars['user'])) {
    $user = $vars['user'];
    ?>
    <h3>Single user profile</h3>
    <p>
        Id is: <strong><?php echo $user->getId(); ?></strong><br>
        FirstName is: <strong><?php echo $user->getFirstName(); ?></strong><br>
        LastName is: <strong><?php echo $user->getLastName(); ?></strong><br>
        Email is: <strong><?php echo $user->getEmail(); ?></strong><br>
        Username is: <strong><?php echo $user->getUsername(); ?></strong><br>
    </p>
<?php
}